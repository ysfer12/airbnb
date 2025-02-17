<?php 

namespace App\Controllers\back;

use Core\Controller\BaseController;
use App\Models\UserModel;
use App\View\View;

class DashboardUserController extends BaseController
{
  private $UserModel;

  public function __construct()
  {
    $this->UserModel = new UserModel();
  }

  public function index()
  {
    $users = $this->UserModel->getAllUsers();
    return view('back/admin/category/index', ['users' => $users]);
  }

  
}