<?php 

namespace App\Controllers\front;

use App\Models\UserModel;

class UserController
{

  private $UserModel;

  public function __construct()
  {
    $this->UserModel = new UserModel();
  }

  


  

}

