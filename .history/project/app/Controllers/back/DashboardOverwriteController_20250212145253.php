<?php
namespace App\Controllers\back;

use Core\Controller\BaseController;
use App\View\View;


class DashboardOverwriteController extends BaseController
{
    public function index()
    {
  
      view('back/admin/s',  ['categories' => $categories]);
  
      exit();
    }
}