<?php

namespace App\Entities;

class Payment
{

  private $id;
  private $amount;
  private $status;
  private $timeStamp;
  private $booking;


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
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setAmount($amount)
  {
    $this->amount = $amount;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function setTimeStamp($timeStamp)
  {
    $this->timeStamp = $timeStamp;
  }

  public function setBooking($booking)
  {
    $this->booking = $booking;
  }
}
