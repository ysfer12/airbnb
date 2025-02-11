<?php

namespace App\Entities;

class Payment
{

  private int $id;
  private float $amount;
  private string $status;
  private string $timeStamp;
  private Booking $booking;


  // getters:
  public function getId()
  {
    return $this->id;
  }

  public function getAmount()
  {
    return $this->amount;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getTimeStamp()
  {
    return $this->timeStamp;
  }

  public function getBooking()
  {
    return $this->booking;
  }


  // setters:
  public function setId(int $id)
  {
    $this->id = $id;
  }

  public function setAmount(string $amount)
  {
    $this->amount = $amount;
  }

  public function setStatus(string $status)
  {
    $this->status = $status;
  }

  public function setTimeStamp(string $timeStamp)
  {
    $this->timeStamp = $timeStamp;
  }

  public function setBooking(Booking $booking)
  {
    $this->booking = $booking;
  }
}
