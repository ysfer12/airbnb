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

  public function index()
  {
      $categories = $this->CategoryModel->findAll();

      // Passing data to the view
      view('back/categories/index', ['categories' => $categories]);

      exit; // Stop further execution after rendering the view
  }



}