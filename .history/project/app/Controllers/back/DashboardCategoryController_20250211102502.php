<?php 

namespace App\Controllers\back;

use Core\Controller\BaseController;
use App\Models\CategoryModel;


class DashboardCategoryController extends BaseController
{

  private $CategoryModel;


  public function __construct()
  {
    $this->CategoryModel = new CategoryModel();
  }

  
  



}