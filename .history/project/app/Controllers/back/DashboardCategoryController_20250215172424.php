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

        view('back/admin/category/index', ['categories' => $categories]);
        exit();
    }

    public function delete()
    {
        $id = $_POST['delete_category'];
        $deleted = $this->CategoryModel->delete($id);

        $message = $deleted ? "Category deleted successfully." : "Failed to delete category.";
        $categories = $this->CategoryModel->findAll();

        view('back/admin/category/index', [
            'categories' => $categories,
            'message'    => $message
        ]);
        exit();
    }

    public function add()
    {
        $data = [
            'name'        => $_POST['name'],
            'description' => $_POST['description']
        ];

        $newCategoryId = $this->CategoryModel->save($data);
        $message = $newCategoryId ? "Category added successfully." : "Failed to add category.";
        $categories = $this->CategoryModel->findAll();

        view('back/admin/category/index', [
            'categories' => $categories,
            'message'    => $message
        ]);
        exit();
    }


    public
}
