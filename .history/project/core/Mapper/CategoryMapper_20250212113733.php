<?php

namespace Core\Mapper;

use App\Entities\Category;

class CategoryMapper
{
  
  public static function mapCategory(array $data): Category
  {
    $category = new Category();
    $category->setId($data['category_id']);
    $category->setName($data['category_name']);
    $category->setDescription($data['category_description']);
    return $category;
  }
}
