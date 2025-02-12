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
        // $dataCategory = 
        // [
        //     'name' => $dataCategory['name'],
        //     'description' => $dataCategory['description']

        // ]
            

        $data = $this->query("INSERT INTO categories (name, description) VALUES (:name, :description)", $dataCategory);
       
        
    }

    // Delete a category
    public function delete(int $id): bool
    {
        return $this->deleteRow('categories', ['id' => $id]);
    }
}
