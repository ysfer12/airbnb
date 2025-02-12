<?php


namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\CategoryMapper;
use App\Entities\Category;

class CategoryModel extends BaseModel
{

    public function findById(int $id)
    {
        $data = $this->query("SELECT * FROM categories WHERE id = :id", ['id' => $id]);
        $data = $data->fetch();
        return $data ? CategoryMapper::mapCategory($data) : null;
    }


    public function findAll()
    {
        $data = $this->query("SELECT * FROM categories");
        
        $data = $data->fetchAll();

        $results = [];
        foreach ($data as $row) {
            $results[] = CategoryMapper::mapCategory($row);
        }
        return $results;
    }


    
    // Save a category (create or update)
    public function save($dataCategory)
    {
        $data = CategoryMapper::mapCategoryToArray($category);

        if ($category->getId()) {
            // Update existing category
            $this->update('categories', $data, ['id' => $category->getId()]);
        } else {
            // Insert new category and set the generated ID
            $id = $this->insert('categories', $data);
            $category->setId($id);
        }

        return $category;
    }

    // Delete a category
    public function delete(int $id): bool
    {
        return $this->deleteRow('categories', ['id' => $id]);
    }
}
