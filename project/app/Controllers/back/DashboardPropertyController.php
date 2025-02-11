<?php 

namespace App\Controllers\back;

use Core\Controller\BaseController;
use App\Models\PropertyModel;


class DashboardPropertyController extends BaseController
{
  
  private $PropertyModel;


  public function __construct()
  {
    $this->PropertyModel = new PropertyModel();
  }
  




}