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
    return view('back/admin/user/index', ['users' => $users]);
  }

  public function activateUser($userId) {
    try {
        $success = $this->UserModel->activateUser($userId);
        
        header('Content-Type: application/json');
        echo json_encode([
            'success' => $success,
            'message' => $success ? 'User activated successfully' : 'Failed to activate user'
        ]);
    } catch (\Exception $e) {
        header('Content-Type: application/json');
        echo json_encode([
            'success' => false,
            'message' => 'An error occurred'
        ]);
    }
    exit;
}

  
}