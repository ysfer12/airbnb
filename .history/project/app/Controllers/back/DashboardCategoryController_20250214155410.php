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





  public function delete()
  {
    $id = $_POST['delete_category'];

    if ($this->CategoryModel->delete($id)) {
      // Redirect to the category index page with a success message
      header('Location: /back/admin/category/index?message=Category deleted successfully');
    } else {
      // Redirect to the category index page with an error message
      header('Location: /back/admin/category/index?message=Failed to delete category');
    }

    exit();
  }
}
