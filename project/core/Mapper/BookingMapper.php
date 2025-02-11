<?php 


namespace Core\Mapper;

use App\Entities\Booking;


class BookingMapper
{
  
  public static function mapBooking($data)
  {
    $booking = new Booking();
    $booking->setId($data['id'] ?? null);
    $booking->setStartDate($data['startDate'] ?? null);
    $booking->setEndDate($data['endDate'] ?? null);
    $booking->setGuestCount($data['guestCount'] ?? null);
    $booking->setTotalPrice($data['totalPrice'] ?? null);
    $booking->setStatus($data['status'] ?? null);
    


    // call mapper property:
    $propretyData = [
      'id'=> $data['id'] ?? null,
      'title'=> $data['title'] ?? null,
      'description'=> $data['description'] ?? null
    ];
    
    $booking->setProperty(PropertyMapper::mapProperty($propretyData));


    // call mapper user:
    $UserData = [
      'id'=> $data['id'] ?? null,
      'name'=> $data['name'] ?? null,
      'email'=> $data['email'] ?? null
    ];

    $booking->setTraveler(UserMapper::mapUser($UserData));


    return $booking;
  }

  

}



