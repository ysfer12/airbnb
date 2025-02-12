<?php 


namespace Core\Mapper;

use App\Entities\Category;


class CategoryMapper
{
  
  public static function mapCategory($data)
  {
    $category = new Category();
    $category->setId($data['id']);
    $category->setName($data['name']);
    $category->setDescription($data['description']);
    

    return $category;
  }

  

}



