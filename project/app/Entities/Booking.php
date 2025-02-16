<?php

namespace App\Entities;

use JsonSerializable;

class Booking implements JsonSerializable
{
    private $id;
    private $property_id;
    private $traveler_id;
    private $start_date;
    private $end_date;
    private $guest_count;
    private $total_price;
    private $status;
    private $created_at;
    private $updated_at;
    private $cancellation_reason;
    private $special_requests;

    // Property relation data
    private $property_title;
    private $property_address;
    private $property_image;

    // Traveler relation data
    private $traveler_name;
    private $traveler_email;

    // Getters
    public function getId() { return $this->id; }
    public function getPropertyId() { return $this->property_id; }
    public function getTravelerId() { return $this->traveler_id; }
    public function getStartDate() { return $this->start_date; }
    public function getEndDate() { return $this->end_date; }
    public function getGuestCount() { return $this->guest_count; }
    public function getTotalPrice() { return $this->total_price; }
    public function getStatus() { return $this->status; }
    public function getCreatedAt() { return $this->created_at; }
    public function getUpdatedAt() { return $this->updated_at; }
    public function getCancellationReason() { return $this->cancellation_reason; }
    public function getSpecialRequests() { return $this->special_requests; }
    public function getPropertyTitle() { return $this->property_title; }
    public function getPropertyAddress() { return $this->property_address; }
    public function getPropertyImage() { return $this->property_image; }
    public function getTravelerName() { return $this->traveler_name; }
    public function getTravelerEmail() { return $this->traveler_email; }

    // Setters
    public function setId($id) { $this->id = $id; }
    public function setPropertyId($property_id) { $this->property_id = $property_id; }
    public function setTravelerId($traveler_id) { $this->traveler_id = $traveler_id; }
    public function setStartDate($start_date) { $this->start_date = $start_date; }
    public function setEndDate($end_date) { $this->end_date = $end_date; }
    public function setGuestCount($guest_count) { $this->guest_count = $guest_count; }
    public function setTotalPrice($total_price) { $this->total_price = $total_price; }
    public function setStatus($status) { $this->status = $status; }
    public function setCreatedAt($created_at) { $this->created_at = $created_at; }
    public function setUpdatedAt($updated_at) { $this->updated_at = $updated_at; }
    public function setCancellationReason($reason) { $this->cancellation_reason = $reason; }
    public function setSpecialRequests($requests) { $this->special_requests = $requests; }
    public function setPropertyTitle($title) { $this->property_title = $title; }
    public function setPropertyAddress($address) { $this->property_address = $address; }
    public function setPropertyImage($image) { $this->property_image = $image; }
    public function setTravelerName($name) { $this->traveler_name = $name; }
    public function setTravelerEmail($email) { $this->traveler_email = $email; }

    public function jsonSerialize(): array
    {
        return [
            'id' => $this->id,
            'property_id' => $this->property_id,
            'traveler_id' => $this->traveler_id,
            'start_date' => $this->start_date,
            'end_date' => $this->end_date,
            'guest_count' => $this->guest_count,
            'total_price' => $this->total_price,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'cancellation_reason' => $this->cancellation_reason,
            'special_requests' => $this->special_requests,
            'property_title' => $this->property_title,
            'property_address' => $this->property_address,
            'property_image' => $this->property_image,
            'traveler_name' => $this->traveler_name,
            'traveler_email' => $this->traveler_email
        ];
    }
}