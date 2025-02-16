<?php

namespace App\Entities;

class Booking
{

  private $id;
  private $startDate;
  private $endDate;
  private $guestCount;
  private $totalPrice;
  private $status;
  private $property;
  private $traveler;


  // Getters
  public function getId()
  {
    return $this->id;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function getGuestCount()
  {
    return $this->guestCount;
  }

  public function getTotalPrice()
  {
    return $this->totalPrice;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getProperty()
  {
    return $this->property;
  }

  public function getTraveler()
  {
    return $this->traveler;
  }


  // Setters
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function setGuestCount($guestCount)
  {
    $this->guestCount = $guestCount;
  }

  public function setTotalPrice($totalPrice)
  {
    $this->totalPrice = $totalPrice;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function setProperty($property)
  {
    $this->property = $property;
  }

  public function setTraveler($traveler)
  {
    $this->traveler = $traveler;
  }
}
