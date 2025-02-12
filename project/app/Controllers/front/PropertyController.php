<?php 

namespace App\Controllers\front;

use App\Models\PropertyModel;

class PropertyController
{

  private $PropertyModel;

  public function __construct()
  {
    $this->PropertyModel = new PropertyModel();
  }

  

  // display Latest 10:
  public function displayLatestTen()
  {
    $data = $this->PropertyModel->displayLatestTen();

    // dump($data[1]);



    view('front/home', ['propertys' => $data]);
    
  }





  // displayProperty:

  // creatProperty:

  // updateProperty :

  // deleteProperty :
  
  // getById :

  // getByName :

  // validateProperty :

  // viewStatistiques :

  

}

