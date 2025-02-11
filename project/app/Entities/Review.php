<?php

namespace App\Entities;

class Review
{
  private int $id;
  private int $rating;
  private string $comment;
  private string $createdAt;
  private Booking $booking;
  private User $traveler;



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
  public function setId(int $id)
  {
    $this->id = $id;
  }

  public function setRating(int $rating)
  {
    $this->rating = $rating;
  }

  public function setComment(string $comment)
  {
    $this->comment = $comment;
  }

  public function setCreatedAt(string $createdAt)
  {
    $this->createdAt = $createdAt;
  }

  public function setBooking(Booking $booking)
  {
    $this->booking = $booking;
  }

  public function setTraveler(User $traveler)
  {
    $this->traveler = $traveler;
  }
}
