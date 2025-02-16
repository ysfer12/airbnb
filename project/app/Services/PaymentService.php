<?php
namespace App\Services;

use Stripe\Stripe;
use Stripe\PaymentIntent;
use PayPalHttp\HttpException;
use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;
use PayPalCheckoutSdk\Orders\OrdersCaptureRequest;

class PaymentService
{
    private $stripeSecretKey;
    private $paypalClient;

    public function __construct()
    {
        // Initialize Stripe
        $this->stripeSecretKey = $_ENV['STRIPE_SECRET_KEY'];
        Stripe::setApiKey($this->stripeSecretKey);

        // Initialize PayPal
        $environment = new SandboxEnvironment(
            $_ENV['PAYPAL_CLIENT_ID'],
            $_ENV['PAYPAL_CLIENT_SECRET']
        );
        $this->paypalClient = new PayPalHttpClient($environment);
    }

    public function createStripePayment($amount)
    {
        try {
            return PaymentIntent::create([
                'amount' => $amount * 100, // Convert to cents
                'currency' => 'eur',
                'payment_method_types' => ['card'],
                'capture_method' => 'manual' // For manual capture after confirmation
            ]);
        } catch (\Exception $e) {
            error_log('Stripe payment creation error: ' . $e->getMessage());
            throw $e;
        }
    }

    public function confirmStripePayment($paymentIntentId)
    {
        try {
            $paymentIntent = PaymentIntent::retrieve($paymentIntentId);
            $paymentIntent->capture();
            return $paymentIntent->status === 'succeeded';
        } catch (\Exception $e) {
            error_log('Stripe payment confirmation error: ' . $e->getMessage());
            throw $e;
        }
    }

    public function createPayPalOrder($amount)
    {
        try {
            $request = new OrdersCreateRequest();
            $request->prefer('return=representation');

            $request->body = [
                'intent' => 'CAPTURE',
                'purchase_units' => [[
                    'amount' => [
                        'currency_code' => 'EUR',
                        'value' => $amount
                    ]
                ]],
                'application_context' => [
                    'user_action' => 'PAY_NOW',
                    'return_url' => $_ENV['APP_URL'] . '/booking/success',
                    'cancel_url' => $_ENV['APP_URL'] . '/booking/cancel'
                ]
            ];

            $response = $this->paypalClient->execute($request);
            return [
                'id' => $response->result->id,
                'status' => $response->result->status
            ];
        } catch (HttpException $e) {
            error_log('PayPal order creation error: ' . $e->getMessage());
            throw $e;
        }
    }

    public function capturePayPalPayment($orderId)
    {
        try {
            $request = new OrdersCaptureRequest($orderId);
            $response = $this->paypalClient->execute($request);
            return $response->result->status === 'COMPLETED';
        } catch (HttpException $e) {
            error_log('PayPal payment capture error: ' . $e->getMessage());
            throw $e;
        }
    }

    public function refundPayment($paymentId, $amount, $reason = '')
    {
        try {
            $payment = PaymentIntent::retrieve($paymentId);

            if ($payment->status === 'succeeded') {
                return \Stripe\Refund::create([
                    'payment_intent' => $paymentId,
                    'amount' => $amount * 100,
                    'reason' => $reason
                ]);
            }

            return false;
        } catch (\Exception $e) {
            error_log('Payment refund error: ' . $e->getMessage());
            throw $e;
        }
    }
}