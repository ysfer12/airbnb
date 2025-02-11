<?php 


namespace Core\Mapper;

use App\Entities\Booking;


class BookingMapper
{
  
  public static function mapBooking($data)
  {
    $booking = new Booking();
    $booking->setId($data['id']);
    $booking->setStartDate($data['startDate']);
    $booking->setEndDate($data['endDate']);
    $booking->setGuestCount($data['guestCount']);
    $booking->setTotalPrice($data['totalPrice']);
    $booking->setStatus($data['status']);
    


    // call mapper property:
    $propretyData = [
      'id'=> $data['id'],
      'title'=> $data['title'],
      'description'=> $data['description']
    ];
    
    $booking->setProperty(PropertyMapper::mapProperty($propretyData));


    // call mapper user:
    $UserData = [
      'id'=> $data['id'],
      'name'=> $data['name'],
      'email'=> $data['email']
    ];

    $booking->setTraveler(UserMapper::mapUser($UserData));


    return $booking;
  }

  

}



