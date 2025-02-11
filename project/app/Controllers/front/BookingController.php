<?php 

namespace App\Controllers\front;

use App\Models\BookingModel;

class BookingController
{

  private $BookingModel;


  // public function __construct()
  // {
  //     $this->BookingModel = new BookingModel();
  // }

  public function showBookingPage()
  {
      // Assuming you have a view rendering method
      return view('front/booking');
  }  

}

