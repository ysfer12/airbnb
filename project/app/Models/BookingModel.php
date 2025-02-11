<?php
namespace App\Models;

use Core\Model\BaseModel;
use App\Entities\Booking;
use PDO;

class BookingModel extends BaseModel {
    public function createBooking(Booking $booking) {
        try {
            $query = "INSERT INTO bookings 
                      (property_id, traveler_id, start_date, end_date, 
                       guest_count, total_price, status, special_requests) 
                      VALUES 
                      (:property_id, :traveler_id, :start_date, :end_date, 
                       :guest_count, :total_price, :status, :special_requests)
                      RETURNING id";
            
            $stmt = $this->query($query, [
                ':property_id' => $booking->getPropertyId(),
                ':traveler_id' => $booking->getTravelerId(),
                ':start_date' => $booking->getStartDate(),
                ':end_date' => $booking->getEndDate(),
                ':guest_count' => $booking->getGuestCount(),
                ':total_price' => $booking->getTotalPrice(),
                ':status' => $booking->getStatus() ?? 'pending',
                ':special_requests' => $booking->getSpecialRequests()
            ]);
            
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['id'];

        } catch (\Exception $e) {
            throw new \Exception("Booking creation failed: " . $e->getMessage());
        }
    }

    public function calculateTotalPrice($propertyId, $startDate, $endDate) {
        try {
            // Fetch property base price
            $query = "SELECT base_price FROM properties WHERE id = :property_id";
            $stmt = $this->query($query, [':property_id' => $propertyId]);
            $property = $stmt->fetch(PDO::FETCH_ASSOC);

            if (!$property) {
                throw new \Exception("Property not found");
            }

            // Calculate nights
            $start = new \DateTime($startDate);
            $end = new \DateTime($endDate);
            $nights = $start->diff($end)->days;

            return $property['base_price'] * $nights;

        } catch (\Exception $e) {
            throw new \Exception("Price calculation failed: " . $e->getMessage());
        }
    }

    public function checkAvailability($propertyId, $startDate, $endDate) {
        try {
            $query = "SELECT COUNT(*) as conflicting_bookings 
                      FROM bookings 
                      WHERE property_id = :property_id 
                      AND status != 'cancelled' 
                      AND (
                          (start_date BETWEEN :start_date AND :end_date) OR 
                          (end_date BETWEEN :start_date AND :end_date) OR 
                          (:start_date BETWEEN start_date AND end_date)
                      )";
            
            $stmt = $this->query($query, [
                ':property_id' => $propertyId,
                ':start_date' => $startDate,
                ':end_date' => $endDate
            ]);

            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result['conflicting_bookings'] == 0;

        } catch (\Exception $e) {
            throw new \Exception("Availability check failed: " . $e->getMessage());
        }
    }
}