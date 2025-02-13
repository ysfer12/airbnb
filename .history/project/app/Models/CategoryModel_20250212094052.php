<?php

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\CategoryMapper;
use App\Entities\Category;

class CategoryModel extends BaseModel
{
    public function findById(int $id)
    {
        $stmt = $this->conn->prepare("SELECT categories.id as category_id, categories.name as category_name, categories.description as category_description FROM categories WHERE id = :id");
        $stmt->execute(['id' => $id]);
        $data = $stmt->fetch();
        return $data ? CategoryMapper::mapCategory($data) : null;
    }

    public function findAll()
    {
        $stmt = $this->conn->prepare("SELECT categories.id as category_id, categories.name as category_name, categories.description as category_description FROM categories");
        $stmt->execute();
        $data = $stmt->fetchAll();

        $results = [];
        foreach ($data as $row) {
            $results[] = CategoryMapper::mapCategory($row);
        }
        return $results;
    }

    public function save($dataCategory)
    {
        $stmt = $this->conn->prepare("INSERT INTO categories (name, description) VALUES (:name, :description)");
        return $stmt->execute($dataCategory);
    }

    public function update($dataCategory)
    {
        $stmt = $this->conn->prepare("UPDATE categories SET name = :name, description = :description WHERE id = :id");
        return $stmt->execute($dataCategory);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->conn->prepare("DELETE FROM categories WHERE id = :id");
        return $stmt->execute(['id' => $id]);
    }
}