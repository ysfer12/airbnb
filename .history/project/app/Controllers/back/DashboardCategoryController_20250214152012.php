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



  // public function show($id)
  // {
  //     $category = $this->CategoryModel->findById($id);

  //     view('back/categories/show', ['category' => $category]);

  //     exit();
  // }


  // hta t9ad dyal delete

  public function delete()
  {
    $id = $_GET['id'];
    $_DELETE['delete_category']

    $this->CategoryModel->delete($id);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
  }


}
