<?php

namespace App\Controllers\front;

use App\Models\BookingModel;
use App\Models\PropertyModel;
use App\Services\EmailService;
use Core\Session\Session;
use Core\Validation\Validator;

class BookingController
{
    private $bookingModel;
    private $propertyModel;
    private $emailService;
    private $userId = 1; // Hard-coded user ID for testing

    public function __construct()
    {
        $this->bookingModel = new BookingModel();
        $this->propertyModel = new PropertyModel();
        $this->emailService = new EmailService();
    }

    public function createBooking()
    {
        header('Content-Type: application/json');

        try {
            // Get JSON data
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);

            // Validate required fields
            $validator = new Validator([
                'property_id' => $data['property_id'] ?? null,
                'check_in' => $data['check_in'] ?? null,
                'check_out' => $data['check_out'] ?? null,
                'guests' => $data['guests'] ?? null,
                'total_price' => $data['total'] ?? null
            ]);

            if ($validator->isErrors()) {
                throw new \Exception('Invalid input data: ' . implode(', ', $validator->getErrors()));
            }

            // Verify property exists
            $property = $this->propertyModel->getPropertyById($data['property_id']);
            if (!$property) {
                throw new \Exception('Property not found');
            }

            // Check dates are valid
            $checkIn = strtotime($data['check_in']);
            $checkOut = strtotime($data['check_out']);

            if ($checkIn >= $checkOut) {
                throw new \Exception('Check-out date must be after check-in date');
            }

            // Check availability
            if (!$this->bookingModel->checkAvailability(
                $data['property_id'],
                $data['check_in'],
                $data['check_out']
            )) {
                throw new \Exception('Property not available for selected dates');
            }

            // Calculate number of nights
            $nights = ceil(($checkOut - $checkIn) / (60 * 60 * 24));

            // Verify minimum stay
            if ($nights < $property->getMinimumStay()) {
                throw new \Exception("Minimum stay is {$property->getMinimumStay()} nights");
            }

            // Verify guest count
            if ($data['guests'] > $property->getMaxGuests()) {
                throw new \Exception("Maximum {$property->getMaxGuests()} guests allowed");
            }

            // Prepare booking data
            $bookingData = [
                'property_id' => $data['property_id'],
                'traveler_id' => $this->userId,
                'start_date' => $data['check_in'],
                'end_date' => $data['check_out'],
                'guest_count' => $data['guests'],
                'total_price' => $data['total'],
                'status' => 'pending',
                'special_requests' => $data['special_requests'] ?? null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            // Create booking
            $bookingId = $this->bookingModel->createBooking($bookingData);

            if (!$bookingId) {
                throw new \Exception('Failed to create booking');
            }

            // Get created booking
            $booking = $this->bookingModel->getBookingById($bookingId);

            // Send confirmation email
            try {
                $this->emailService->sendBookingConfirmation($booking);
            } catch (\Exception $e) {
                // Log email error but don't stop the process
                error_log("Failed to send booking confirmation email: " . $e->getMessage());
            }

            echo json_encode([
                'success' => true,
                'booking_id' => $bookingId,
                'message' => 'Booking created successfully',
                'redirect_url' => "/payment/process/{$bookingId}"
            ]);

        } catch (\Exception $e) {
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
        exit;
    }

    public function renderBookingView($propertyId)
    {
        $property = $this->propertyModel->getPropertyById($propertyId);

        if (!$property) {
            Session::setSession('error', 'Property not found');
            redirect('/property');
            exit;
        }

        $data = [
            'title' => 'Book ' . $property->getTitle(),
            'property' => $property
        ];

        view('front/booking', $data);
    }

    public function bookingSuccess($id)
    {
        $booking = $this->bookingModel->getBookingById($id);

        if (!$booking || $booking->getTravelerId() !== $this->userId) {
            Session::setSession('error', 'Booking not found');
            redirect('/property');
            exit;
        }

        $data = [
            'title' => 'Booking Confirmed',
            'booking' => $booking
        ];

        view('front/booking-success', $data);
    }

    public function getUserBookings()
    {
        $bookings = $this->bookingModel->getUserBookings($this->userId);

        $data = [
            'title' => 'My Bookings',
            'bookings' => $bookings
        ];

        view('front/bookings', $data);
    }

    public function getBookingDetails($id)
    {
        $booking = $this->bookingModel->getBookingById($id);

        if (!$booking || $booking->getTravelerId() !== $this->userId) {
            Session::setSession('error', 'Booking not found');
            redirect('/bookings');
            exit;
        }

        $data = [
            'title' => 'Booking Details',
            'booking' => $booking
        ];

        view('front/booking-details', $data);
    }

    public function cancelBooking()
    {
        header('Content-Type: application/json');

        try {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);

            $validator = new Validator([
                'booking_id' => $data['booking_id'] ?? null,
                'reason' => $data['reason'] ?? null
            ]);

            if ($validator->isErrors()) {
                throw new \Exception('Invalid input data');
            }

            $booking = $this->bookingModel->getBookingById($data['booking_id']);

            if (!$booking || $booking->getTravelerId() !== $this->userId) {
                throw new \Exception('Booking not found');
            }

            // Check if booking can be cancelled (e.g., not too close to check-in)
            $checkIn = strtotime($booking->getStartDate());
            $cancellationDeadline = $checkIn - (7 * 24 * 60 * 60); // 7 days before check-in

            if (time() > $cancellationDeadline) {
                throw new \Exception('Booking cannot be cancelled within 7 days of check-in');
            }

            $success = $this->bookingModel->cancelBooking(
                $data['booking_id'],
                $data['reason']
            );

            if (!$success) {
                throw new \Exception('Failed to cancel booking');
            }

            // Send cancellation email
            try {
                $this->emailService->sendCancellationEmail($booking);
            } catch (\Exception $e) {
                error_log("Failed to send cancellation email: " . $e->getMessage());
            }

            echo json_encode([
                'success' => true,
                'message' => 'Booking cancelled successfully'
            ]);

        } catch (\Exception $e) {
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
        exit;
    }

    public function downloadContract($id)
    {
        $booking = $this->bookingModel->getBookingById($id);

        if (!$booking || $booking->getTravelerId() !== $this->userId) {
            Session::setSession('error', 'Booking not found');
            redirect('/bookings');
            exit;
        }

        // Generate PDF contract
        $pdf = $this->emailService->generateBookingContract($booking);

        // Set headers for download
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment; filename="booking-contract-' . $id . '.pdf"');

        echo $pdf;
        exit;
    }
}