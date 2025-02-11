<?php
namespace App\Entities;

class Booking {
    private $id;
    private $propertyId;
    private $travelerId;
    private $startDate;
    private $endDate;
    private $guestCount;
    private $totalPrice;
    private $status;
    private $specialRequests;

    // Getters and Setters
    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; return $this; }

    public function getPropertyId() { return $this->propertyId; }
    public function setPropertyId($propertyId) { $this->propertyId = $propertyId; return $this; }

    public function getTravelerId() { return $this->travelerId; }
    public function setTravelerId($travelerId) { $this->travelerId = $travelerId; return $this; }

    public function getStartDate() { return $this->startDate; }
    public function setStartDate($startDate) { $this->startDate = $startDate; return $this; }

    public function getEndDate() { return $this->endDate; }
    public function setEndDate($endDate) { $this->endDate = $endDate; return $this; }

    public function getGuestCount() { return $this->guestCount; }
    public function setGuestCount($guestCount) { $this->guestCount = $guestCount; return $this; }

    public function getTotalPrice() { return $this->totalPrice; }
    public function setTotalPrice($totalPrice) { $this->totalPrice = $totalPrice; return $this; }

    public function getStatus() { return $this->status; }
    public function setStatus($status) { $this->status = $status; return $this; }

    public function getSpecialRequests() { return $this->specialRequests; }
    public function setSpecialRequests($specialRequests) { $this->specialRequests = $specialRequests; return $this; }
}