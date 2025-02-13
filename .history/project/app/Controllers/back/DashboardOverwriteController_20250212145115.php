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

    public function overwrite()
    {
        // Your logic to overwrite the dashboard settings
        // Example: $this->overwriteDashboardSettings();

        // Redirect back to the dashboard with a success message
        return redirect()->to('/back/dashboard')->with('success', 'Dashboard settings overwritten successfully.');
    }

    private function overwriteDashboardSettings()
    {
        // Implement your overwrite logic here
    }
}