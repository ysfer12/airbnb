<?php 

namespace App\Controllers\back;

use Core\Controller\BaseController;
use App\Models\UserModel;


class DashboardUserController extends BaseController
{
  
  private $UserModel;


  public function __construct()
  {
    $this->UserModel = new UserModel();
  }
  





}