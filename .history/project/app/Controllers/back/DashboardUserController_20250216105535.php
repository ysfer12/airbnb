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

  // Display a listing of the users
  public function index()
  {
    $users = $this->UserModel->getAllUsers();
    return $this->view('dashboard.users.index', ['users' => $users]);
  }

  // Show the form for creating a new user
  public function create()
  {
    return $this->view('dashboard.users.create');
  }

  // Store a newly created user in storage
  public function store()
  {
    $data = $_POST;
    $this->UserModel->createUser($data);
    return $this->redirect('dashboard/users');
  }

  // Display the specified user
  public function show($id)
  {
    $user = $this->UserModel->getUserById($id);
    return $this->view('dashboard.users.show', ['user' => $user]);
  }

  // Show the form for editing the specified user
  public function edit($id)
  {
    $user = $this->UserModel->getUserById($id);
    return $this->view('dashboard.users.edit', ['user' => $user]);
  }

  // Update the specified user in storage
  public function update($id)
  {
    $data = $_POST;
    $this->UserModel->updateUser($id, $data);
    return $this->redirect('dashboard/users');
  }

  // Remove the specified user from storage
  public function destroy($id)
  {
    $this->UserModel->deleteUser($id);
    return $this->redirect('dashboard/users');
  }
}