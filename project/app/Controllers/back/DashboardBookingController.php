<?php 

namespace App\Controllers\back;

use Core\Controller\BaseController;
use App\Models\BookingModel;


class DashboardBookingController extends BaseController
{
  
  
  private $BookingModel;

  public function __construct()
  {
    $this->BookingModel = new BookingModel();
  }


  


}