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

 
    public function save($dataCategory)
    {
            

        $data = $this->query("INSERT INTO categories (name, description) VALUES (:name, :description)", $dataCategory);
       
        return $data;

    }



    // Delete a category
    public function delete(int $id): bool
    {
        return $this->query('delete from tabele ta dirha', ['id' => $id]);
    }
}
