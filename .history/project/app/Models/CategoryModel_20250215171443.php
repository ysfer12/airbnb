<?php


namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\CategoryMapper;
use App\Entities\Category;

class CategoryModel extends BaseModel
{

    public function findById(int $id)
    {
        $data = $this->conn->query("SELECT categories.id as category_id, categories.name as category_name, categories.description as category_description FROM categories WHERE id = :id", ['id' => $id]);
        $data = $data->fetch();
        return $data ? CategoryMapper::mapCategory($data) : null;
    }


    public function findAll()
    {
        $data = $this->conn->query("SELECT categories.id as category_id, categories.name as category_name, categories.description as category_description  FROM categories");

        $data = $data->fetchAll();

        if (!$data) {

            die("Aucune donnée trouvée !");
        }

        // dump($data);
        $results = [];
        foreach ($data as $row) {
            $results[] = CategoryMapper::mapCategory($row);
        }

        return $results;
    }


    public function save($dataCategory)
    {

        $stmt = $this->conn->prepare("INSERT INTO categories (name, description) VALUES (:name, :description)");
        $data = $stmt->execute($dataCategory);

        return $data;
    }

    public function update($dataCategory)
    {
        $data = $this->query("UPDATE categories SET name = :name, description = :description WHERE id = :id", $dataCategory);

        return $data;
    }


    public function delete($id)
    {

        return $this->query('DELETE FROM categories WHERE id = :id', ['id' => $id]);
    }
}
