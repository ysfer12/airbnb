<?php
namespace App\Controllers\back;

use Core\Controller\BaseController;
use App\View\View;


class DashboardOverwriteController extends BaseController
{
    public function index()
    {
      $categories = $this->CategoryModel->findAll();
  
  
      view('back/admin/category/index',  ['categories' => $categories]);
  
      exit();
    }
}