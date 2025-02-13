<?php

namespace App\Services;

use App\Models\PaymentModel; // Assuming you have a PaymentModel
use App\Entities\Payment; // Assuming you have a Payment Entity

class PaymentService
{
    private PaymentModel $paymentModel;

    public function __construct(PaymentModel $paymentModel)
    {
        $this->paymentModel = $paymentModel;
    }

    public function processPayment(float $amount, string $paymentMethod, array $paymentDetails, int $bookingId): array
    {
        $payment = new Payment();
        $payment->setBookingId($bookingId);
        $payment->setAmount($amount);
        $payment->setPaymentMethod($paymentMethod);
        $payment->setStatus('pending');
        $payment->setTimestamp(date('Y-m-d H:i:s')); // Set the timestamp

        // Replace with your actual payment gateway integration (Stripe, PayPal, etc.)
        if ($paymentMethod === 'stripe') {
            try {
                \Stripe\Stripe::setApiKey($_ENV['STRIPE_SECRET_KEY']); // Replace with env var

                $charge = \Stripe\Charge::create([
                    'amount' => $amount * 100, // Amount in cents
                    'currency' => 'usd',
                    'source' => $paymentDetails['token'],
                    'description' => 'Charge for booking ' . $bookingId,
                ]);

                if ($charge->status == 'succeeded') {
                    $payment->setStripePaymentId($charge->id);
                    $payment->setStatus('success');

                    // Save payment information to your database using PaymentModel
                    try {
                        $this->paymentModel->createPayment($payment); // Use your PaymentModel to create the payment
                    } catch (\Exception $e) {
                        // Log the error
                        error_log("Error creating payment record: " . $e->getMessage());
                        return ['success' => false, 'message' => 'Payment processed successfully but an error occurred saving payment information.'];
                    }
                    return ['success' => true, 'transaction_id' => $charge->id];
                } else {
                    $payment->setStatus('failed');
                    $payment->setRefundReason($charge->failure_message); // Set appropriate failure reason

                    // Save payment failure to your database
                    try {
                        $this->paymentModel->createPayment($payment);
                    } catch (\Exception $e) {
                        error_log("Error creating payment record: " . $e->getMessage());
                    }
                    return ['success' => false, 'message' => 'Stripe charge failed: ' . $charge->failure_message];
                }
            }  catch (\Stripe\Exception\CardException $e) {
                // Payment failed
                $payment->setStatus('failed');
                $payment->setRefundReason($e->getMessage());

                // Store payment information to your database
                try {
                    $this->paymentModel->createPayment($payment);
                } catch (\Exception $e) {
                    error_log("Error creating payment record: " . $e->getMessage());
                }
                return ['success' => false, 'message' => 'Stripe error: ' . $e->getMessage()];
            } catch (\Stripe\Exception\RateLimitException $e) {
                // Too many requests made to the API too quickly
                return ['success' => false, 'message' => 'Stripe error: Rate limit exceeded.'];
            } catch (\Stripe\Exception\InvalidRequestException $e) {
                // Invalid parameters were supplied to Stripe's API
                return ['success' => false, 'message' => 'Stripe error: Invalid request: ' . $e->getMessage()];
            } catch (\Stripe\Exception\AuthenticationException $e) {
                // Authentication with Stripe's API failed
                // (maybe you changed API keys recently)
                return ['success' => false, 'message' => 'Stripe error: Authentication failed.'];
            } catch (\Stripe\Exception\ApiConnectionException $e) {
                // Network communication with Stripe failed
                return ['success' => false, 'message' => 'Stripe error: Network error.'];
            } catch (\Stripe\Exception\ApiErrorException $e) {
                // Display a very generic error to the user, and maybe send
                // yourself an email
                return ['success' => false, 'message' => 'Stripe error: An unexpected error occurred.'];
            }
        } elseif ($paymentMethod === 'paypal') {
            // PayPal integration (example - very basic, needs full implementation)
            // Implement your PayPal API calls here
            // ...
            return ['success' => false, 'message' => 'PayPal integration not yet implemented.'];
        } else {
            return ['success' => false, 'message' => 'Invalid payment method.'];
        }
    }
}
