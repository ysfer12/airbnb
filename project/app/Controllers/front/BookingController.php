<?php 

namespace App\Controllers\front;

use App\Models\BookingModel;

class BookingController
{

  private $BookingModel;

  public function __construct()
  {
    $this->BookingModel = new BookingModel();
  }

  


  

}

