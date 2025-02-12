<?php
// Core/Mapper/CategoryMapper.php

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

    // Map Category entity to database array
    public static function mapCategoryToArray(Category $category): array
    {
        return [
            'id' => $category->getId(),
            'name' => $category->getName(),
            'description' => $category->getDescription(),
        ];
    }
}