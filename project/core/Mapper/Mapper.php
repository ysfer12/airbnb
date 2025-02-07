<?php 


namespace Core\Mapper;

use App\Entities\Classname;

class Mapper
{

  public static function mapClassName($data)
  {
    return new ClassName($data['id'], $data['name'], $data['email']);
  }

  

}



