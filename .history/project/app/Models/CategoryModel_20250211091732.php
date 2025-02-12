<?php 


namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\CategoryMapper;
use App\Entities\Category;

class CategoryModel extends BaseModel
{
    // Fetch a single category by ID
    public function find(int $id): ?Category
    {
        $data = $this->query("SELECT * FROM categories WHERE id = :id", ['id' => $id]);
        return $data ? CategoryMapper::mapCategory($data) : null;
    }

    // Fetch all categories
    public function findAll(): array
    {
        $results = [];
        $data = $this->fetchAll("SELECT * FROM categories");
        foreach ($data as $row) {
            $results[] = CategoryMapper::mapCategory($row);
        }
        return $results;
    }

    // Save a category (create or update)
    public function save(Category $category): Category
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