<?php
namespace App\Services;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use Exception;

class PaymentService {
    private $stripeSecretKey;

    public function __construct() {
        $this->stripeSecretKey = $_ENV['STRIPE_SECRET_KEY'];
        Stripe::setApiKey($this->stripeSecretKey);
    }

    public function processPayment($bookingDetails) {
        try {
            $checkout_session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => $bookingDetails['amount'] * 100,
                        'product_data' => [
                            'name' => 'Booking #' . $bookingDetails['booking_id']
                        ],
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => 'https://yoursite.com/booking/success',
                'cancel_url' => 'https://yoursite.com/booking/cancel',
            ]);

            return [
                'status' => 'pending',
                'session_id' => $checkout_session->id,
                'checkout_url' => $checkout_session->url
            ];
        } catch (Exception $e) {
            throw new Exception("Payment processing failed: " . $e->getMessage());
        }
    }
}