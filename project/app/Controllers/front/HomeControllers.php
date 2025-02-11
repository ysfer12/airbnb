<?php 

namespace App\Controllers\front;

use App\Models\UserModels;

use Core\View\View;



class HomeControllers
{

  // private $UserModels;

  // public function __construct()
  // {
  //   $this->UserModels = new UserModels();
  // }

  
  public function index()
  {
    


    // view inside page :
    $data = [
      'title' => 'MVC Home', 
      'last_name' => 'MylastName',
      'arr' => [1, 2, 3, 4]
    ];


    view('front/home', $data);

    exit;
  }

  

}


?>