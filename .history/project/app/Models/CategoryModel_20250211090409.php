<?php 

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\CategoryMapper;

class CategoryModel extends BaseModel
{
    protected $mapper;

    public function __construct()
    {
        $this->mapper = new CategoryMapper();
    }

    public function create($data)
    {
        return $this->mapper->insert($data);
    }

    public function read($id)
    {
        return $this->mapper->find($id);
    }

    public function update($id, $data)
    {
        return $this->mapper->update($id, $data);
    }

    public function delete($id)
    {
        return $this->mapper->delete($id);
    }

    public function getAll()
    {
        return $this->mapper->findAll();
    }
}