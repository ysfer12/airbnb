<?php

namespace App\Entities;

class Review
{
  private $id;
  private $rating;
  private $comment;
  private $createdAt;
  private $booking;
  private $traveler;



  // getters:
  public function getId()
  {
    return $this->id;
  }

  public function getRating()
  {
    return $this->rating;
  }

  public function getComment()
  {
    return $this->comment;
  }

  public function getCreatedAt()
  {
    return $this->createdAt;
  }

  public function getBooking()
  {
    return $this->booking;
  }

  public function getTraveler()
  {
    return $this->traveler;
  }


  // setters:
  public function setId($id)
  {
    $this->id = $id;
  }

  public function setRating($rating)
  {
    $this->rating = $rating;
  }

  public function setComment($comment)
  {
    $this->comment = $comment;
  }

  public function setCreatedAt($createdAt)
  {
    $this->createdAt = $createdAt;
  }

  public function setBooking($booking)
  {
    $this->booking = $booking;
  }

  public function setTraveler($traveler)
  {
    $this->traveler = $traveler;
  }
}
