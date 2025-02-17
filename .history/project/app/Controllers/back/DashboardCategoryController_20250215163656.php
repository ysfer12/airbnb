<?php

namespace App\Controllers\back;

use Core\Controller\BaseController;
use App\Models\CategoryModel;
use App\View\View;


class DashboardCategoryController extends BaseController
{

  private $CategoryModel;


  public function __construct()
  {
    $this->CategoryModel = new CategoryModel();
  }

  public function index()
  {
    $categories = $this->CategoryModel->findAll();

    view('back/admin/category/index',  ['categories' => $categories]);

    exit();
  }


  public function delete()
  {
    $id = $_POST['delete_category'];

    if ($this->CategoryModel->delete($id)) {

      view('back/admin/category/index', ['categories' => $this->CategoryModel->findAll()]);
      
    } else {

      view('back/admin/category/index', ['categories' => $this->CategoryModel->findAll()]);
      
    }

    exit();
  }


  public function add()
  {
    $data = [
      'name' => $_POST['name'],
      'description' => $_POST['description']
    ];

    if ($this->CategoryModel->save($data)) {

      view('back/admin/category/index', ['categories' => $this->CategoryModel->findAll()]);
      
    } else {

      view('back/admin/category/index', ['categories' => $this->CategoryModel->findAll()]);
      
    }

    exit();
  }
}
