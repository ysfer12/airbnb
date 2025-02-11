<?php 


namespace Core\Mapper;

use App\Entities\Category;


class CategoryMapper
{
  
  public static function mapCategory($data)
  {
    $category = new Category();
    $category->setId($data['id'] ?? null);
    $category->setName($data['name'] ?? null);
    $category->setDescription($data['description'] ?? null);
    

    return $category;
  }

  

}



