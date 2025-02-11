<?php

namespace App\Entities;

class Booking
{

  private int $id;
  private string $startDate;
  private string $endDate;
  private int $guestCount;
  private float $totalPrice;
  private string $status;
  private Property $property;
  private User $traveler;


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
  public function setId(int $id)
  {
    $this->id = $id;
  }

  public function setStartDate(string $startDate)
  {
    $this->startDate = $startDate;
  }

  public function setEndDate(string $endDate)
  {
    $this->endDate = $endDate;
  }

  public function setGuestCount(int $guestCount)
  {
    $this->guestCount = $guestCount;
  }

  public function setTotalPrice(float $totalPrice)
  {
    $this->totalPrice = $totalPrice;
  }

  public function setStatus(string $status)
  {
    $this->status = $status;
  }

  public function setProperty(Property $property)
  {
    $this->property = $property;
  }

  public function setTraveler(User $traveler)
  {
    $this->traveler = $traveler;
  }


}
