<?php

namespace Core\Mapper;

use App\Entities\Payment;

class PaymentMapper
{
    public static function mapPayment($data): Payment
    {
        $payment = new Payment();

        $payment->setId($data['id'] ?? null);
        $payment->setBookingId($data['booking_id'] ?? null);
        $payment->setAmount($data['amount'] ?? null);
        $payment->setStatus($data['status'] ?? null);
        $payment->setPaymentMethod($data['payment_method'] ?? null);
        $payment->setTimestamp($data['timestamp'] ?? null);
        $payment->setStripePaymentId($data['stripe_payment_id'] ?? null);
        $payment->setPaypalTransactionId($data['paypal_transaction_id'] ?? null);
        $payment->setRefundAmount($data['refund_amount'] ?? null);
        $payment->setRefundReason($data['refund_reason'] ?? null);

        // Map related data
        $payment->setBookingReference($data['booking_reference'] ?? null);
        $payment->setPropertyTitle($data['property_title'] ?? null);
        $payment->setTravelerName($data['traveler_name'] ?? null);

        return $payment;
    }
}