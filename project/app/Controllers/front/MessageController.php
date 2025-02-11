<?php 

namespace App\Controllers\front;

use App\Models\MessageModel;

class MessageController
{

  private $MessageModel;

  public function __construct()
  {
    $this->MessageModel = new MessageModel();
  }

  


  

}

