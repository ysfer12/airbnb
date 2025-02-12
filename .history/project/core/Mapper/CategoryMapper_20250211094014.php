<?php

namespace Core\Mapper;

use App\Entities\Category;

class CategoryMapper
{
    // Map database array to Category entity
    public static function mapCategory(array $data): Category
    {
        $category = new Category();
        $category->setId($data['id']);
        $category->setName($data['name']);
        $category->setDescription($data['description']);
        return $category;
    }


}