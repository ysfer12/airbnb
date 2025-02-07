<?php 

namespace App\Controllers\back;

use Core\View\View;

class DashboardControllers
{

  public function index()
  {
    
    
    // view inside page :

    $data = [
      'title' => 'MVC Home', 
      'last_name' => 'MylastName',
      'arr' => [1, 2, 3, 4]
    ];

    echo 'back dashboardcontrollers';
    
    // view('main', 'home', $data);

    exit;
  }

  

}


?>