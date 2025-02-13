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



}
