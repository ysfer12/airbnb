<?php 


namespace Core\Mapper;

use App\Entities\Review;


class ReviewMapper
{
  
  public static function mapReview($data)
  {
    $review = new Review();
    $review->setId($data['id'] ?? null);
    $review->setRating($data['rating'] ?? null);
    $review->setComment($data['comment'] ?? null);
    $review->setCreatedAt($data['createdAt'] ?? null);


    $review->setBooking($data['booking'] ?? null);
    

    $review->setTraveler($data['Traveler'] ?? null);
    

    return $review;
  }

  

}



