<?php

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\CategoryMapper;
use App\Entities\Category;

class CategoryModel extends BaseModel
{
    public function findById(int $id)
    {
        // Assuming your BaseModel's query method supports parameter binding
        $data = $this->conn->query(
            "SELECT categories.id as category_id, categories.name as category_name, categories.description as category_description 
             FROM categories WHERE id = :id", 
            ['id' => $id]
        );
        $data = $data->fetch();

        return $data ? CategoryMapper::mapCategory($data) : null;
    }

    public function findAll()
    {
        $data = $this->conn->query(
            "SELECT categories.id as category_id, categories.name as category_name, categories.description as category_description  
             FROM categories"
        );
        $data = $data->fetchAll();

        // Instead of dying when no data is found, return an empty array.
        if (!$data) {
            return [];
        }

        $results = [];
        foreach ($data as $row) {
            $results[] = CategoryMapper::mapCategory($row);
        }

        return $results;
    }

    public function save($dataCategory)
    {
        $stmt = $this->conn->prepare("INSERT INTO categories (name, description) VALUES (:name, :description)");
        $success = $stmt->execute($dataCategory);

        if (!$success) {
            // Optionally, log the error instead of dying.
            return false;
        } else {
            return $this->conn->lastInsertId();
        }
    }

    public function update($dataCategory)
    {
        $stmt = $this->conn->prepare("UPDATE categories SET name = :name, description = :description WHERE id = :id");
        $success = $stmt->execute($dataCategory);

        return $success;
    }


    public function delete($id)
    {
        $stmt = $this->conn->prepare("DELETE FROM categories WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}
