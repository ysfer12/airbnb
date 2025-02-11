<?php 

namespace App\Controllers\front;

use App\Models\PaymentModel;

class PaymentController
{

  private $PaymentModel;

  public function __construct()
  {
    $this->PaymentModel = new PaymentModel();
  }

  


  

}

