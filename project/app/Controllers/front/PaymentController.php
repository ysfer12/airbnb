<?php

namespace App\Controllers\front;

use App\Models\PaymentModel;
use App\Models\BookingModel;
use App\Services\EmailService;
use Core\Session\Session;
use Core\Validation\Validator;
use Stripe\Stripe;
use Stripe\PaymentIntent;

class PaymentController
{
    private $paymentModel;
    private $bookingModel;
    private $emailService;
    private $userId = 1; // Hard-coded user ID

    public function __construct()
    {
        $this->paymentModel = new PaymentModel();
        $this->bookingModel = new BookingModel();
        $this->emailService = new EmailService();

        // Initialize Stripe
        Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']);
    }

    public function initializePayment($bookingId)
    {
        $booking = $this->bookingModel->getBookingById($bookingId);

        if (!$booking || $booking->getTravelerId() !== $this->userId) {
            Session::setSession('error', 'Booking not found');
            redirect('/bookings');
            exit;
        }

        $data = [
            'title' => 'Complete Payment',
            'booking' => $booking,
            'stripe_public_key' => $_ENV['STRIPE_PUBLIC_KEY']
        ];

        view('front/payment', $data);
    }

    public function processStripePayment()
    {
        header('Content-Type: application/json');

        try {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);

            $validator = new Validator([
                'booking_id' => $data['booking_id'],
                'amount' => $data['amount']
            ]);

            if ($validator->isErrors()) {
                throw new \Exception('Invalid payment data');
            }

            // Create Stripe Payment Intent
            $paymentIntent = PaymentIntent::create([
                'amount' => $data['amount'] * 100, // Convert to cents
                'currency' => 'usd',
                'metadata' => [
                    'booking_id' => $data['booking_id']
                ]
            ]);

            // Create payment record
            $paymentData = [
                'booking_id' => $data['booking_id'],
                'amount' => $data['amount'],
                'status' => 'pending',
                'payment_method' => 'stripe',
                'stripe_payment_id' => $paymentIntent->id
            ];

            $paymentId = $this->paymentModel->createPayment($paymentData);

            if (!$paymentId) {
                throw new \Exception('Failed to create payment record');
            }

            echo json_encode([
                'success' => true,
                'client_secret' => $paymentIntent->client_secret,
                'payment_id' => $paymentId
            ]);

        } catch (\Exception $e) {
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
        exit;
    }

    public function processPaypalPayment()
    {
        header('Content-Type: application/json');

        try {
            $json = file_get_contents('php://input');
            $data = json_decode($json, true);

            $validator = new Validator([
                'booking_id' => $data['booking_id'],
                'amount' => $data['amount']
            ]);

            if ($validator->isErrors()) {
                throw new \Exception('Invalid payment data');
            }

            // Create payment record
            $paymentData = [
                'booking_id' => $data['booking_id'],
                'amount' => $data['amount'],
                'status' => 'pending',
                'payment_method' => 'paypal'
            ];

            $paymentId = $this->paymentModel->createPayment($paymentData);

            if (!$paymentId) {
                throw new \Exception('Failed to create payment record');
            }

            echo json_encode([
                'success' => true,
                'payment_id' => $paymentId
            ]);

        } catch (\Exception $e) {
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
        exit;
    }

    public function handleStripeWebhook()
    {
        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload, $sig_header, $_ENV['STRIPE_WEBHOOK_SECRET']
            );
        } catch(\UnexpectedValueException $e) {
            http_response_code(400);
            exit();
        }

        switch ($event->type) {
            case 'payment_intent.succeeded':
                $paymentIntent = $event->data->object;
                $this->handleSuccessfulPayment(
                    $paymentIntent->metadata->booking_id,
                    $paymentIntent->id,
                    'stripe'
                );
                break;

            case 'payment_intent.payment_failed':
                $paymentIntent = $event->data->object;
                $this->handleFailedPayment(
                    $paymentIntent->metadata->booking_id,
                    $paymentIntent->id,
                    'stripe'
                );
                break;
        }

        http_response_code(200);
    }

    private function handleSuccessfulPayment($bookingId, $transactionId, $method)
    {
        try {
            // Update payment status
            $payment = $this->paymentModel->getPaymentByBookingId($bookingId);
            if ($payment) {
                $this->paymentModel->updatePaymentStatus($payment->getId(), 'completed', $transactionId);
            }

            // Update booking status
            $this->bookingModel->updateBookingStatus($bookingId, 'confirmed');

            // Send confirmation email
            $booking = $this->bookingModel->getBookingById($bookingId);
            $this->emailService->sendPaymentConfirmation($booking);

        } catch (\Exception $e) {
            error_log("Error processing successful payment: " . $e->getMessage());
        }
    }

    private function handleFailedPayment($bookingId, $transactionId, $method)
    {
        try {
            // Update payment status
            $payment = $this->paymentModel->getPaymentByBookingId($bookingId);
            if ($payment) {
                $this->paymentModel->updatePaymentStatus($payment->getId(), 'failed', $transactionId);
            }

            // Update booking status
            $this->bookingModel->updateBookingStatus($bookingId, 'payment_failed');

            // Send failure notification
            $booking = $this->bookingModel->getBookingById($bookingId);
            $this->emailService->sendPaymentFailureNotification($booking);

        } catch (\Exception $e) {
            error_log("Error processing failed payment: " . $e->getMessage());
        }
    }

    public function getPaymentStatus($paymentId)
    {
        header('Content-Type: application/json');

        try {
            $payment = $this->paymentModel->getPaymentById($paymentId);
            if (!$payment) {
                throw new \Exception('Payment not found');
            }

            echo json_encode([
                'success' => true,
                'status' => $payment->getStatus(),
                'amount' => $payment->getAmount(),
                'payment_method' => $payment->getPaymentMethod()
            ]);
        } catch (\Exception $e) {
            echo json_encode([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
        exit;
    }
}