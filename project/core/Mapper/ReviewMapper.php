<?php 


namespace Core\Mapper;

use App\Entities\Review;


class ReviewMapper
{
  
  public static function mapReview($data)
  {
    $review = new Review();
    $review->setId($data['id']);
    $review->setRating($data['rating']);
    $review->setComment($data['comment']);
    $review->setCreatedAt($data['createdAt']);


    $review->setBooking($data['booking']);
    

    $review->setTraveler($data['Traveler']);
    

    return $review;
  }

  

}



