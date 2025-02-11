<?php 

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\PropertyMapper;

class PropertyModel extends BaseModel
{
  

  
  // display Latest 10:
  public function displayLatestTen()
  {
    $data = $this->query('');
    $data->fetchAll();
    
    
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