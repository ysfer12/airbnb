<?php

namespace App\Entities;

use JsonSerializable;

class Payment implements JsonSerializable
{
    private $id;
    private $booking_id;
    private $amount;
    private $status;
    private $payment_method;
    private $timestamp;
    private $stripe_payment_id;
    private $paypal_transaction_id;
    private $refund_amount;
    private $refund_reason;

    // Booking relation data
    private $booking_reference;
    private $property_title;
    private $traveler_name;

    // Getters
    public function getId() { return $this->id; }
    public function getBookingId() { return $this->booking_id; }
    public function getAmount() { return $this->amount; }
    public function getStatus() { return $this->status; }
    public function getPaymentMethod() { return $this->payment_method; }
    public function getTimestamp() { return $this->timestamp; }
    public function getStripePaymentId() { return $this->stripe_payment_id; }
    public function getPaypalTransactionId() { return $this->paypal_transaction_id; }
    public function getRefundAmount() { return $this->refund_amount; }
    public function getRefundReason() { return $this->refund_reason; }
    public function getBookingReference() { return $this->booking_reference; }
    public function getPropertyTitle() { return $this->property_title; }
    public function getTravelerName() { return $this->traveler_name; }

    // Setters
    public function setId($id) { $this->id = $id; }
    public function setBookingId($booking_id) { $this->booking_id = $booking_id; }
    public function setAmount($amount) { $this->amount = $amount; }
    public function setStatus($status) { $this->status = $status; }
    public function setPaymentMethod($method) { $this->payment_method = $method; }
    public function setTimestamp($timestamp) { $this->timestamp = $timestamp; }
    public function setStripePaymentId($id) { $this->stripe_payment_id = $id; }
    public function setPaypalTransactionId($id) { $this->paypal_transaction_id = $id; }
    public function setRefundAmount($amount) { $this->refund_amount = $amount; }
    public function setRefundReason($reason) { $this->refund_reason = $reason; }
    public function setBookingReference($ref) { $this->booking_reference = $ref; }
    public function setPropertyTitle($title) { $this->property_title = $title; }
    public function setTravelerName($name) { $this->traveler_name = $name; }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'booking_id' => $this->booking_id,
            'amount' => $this->amount,
            'status' => $this->status,
            'payment_method' => $this->payment_method,
            'timestamp' => $this->timestamp,
            'stripe_payment_id' => $this->stripe_payment_id,
            'paypal_transaction_id' => $this->paypal_transaction_id,
            'refund_amount' => $this->refund_amount,
            'refund_reason' => $this->refund_reason,
            'booking_reference' => $this->booking_reference,
            'property_title' => $this->property_title,
            'traveler_name' => $this->traveler_name
        ];
    }
}