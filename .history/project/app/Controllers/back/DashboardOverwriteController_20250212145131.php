<?php
namespace App\Controllers\back;

use Core\Controller\BaseController;
use App\View\View;


class DashboardOverwriteController extends BaseController
{
    public function index()
    {
        
        return view('back.dashboard_overwrite');
    }

}