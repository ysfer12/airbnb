<?php

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\UserMapper;

class UserModel extends BaseModel
{
    protected $mapper;

    public function __construct()
    {
        $this->mapper = new UserMapper();
    }

    public function getUserById($id)
    {
        
    }

    public function getAllUsers()
    {
        return $this->mapper->findAll();
    }

    public function createUser($data)
    {
        return $this->mapper->insert($data);
    }

    public function updateUser($id, $data)
    {
        return $this->mapper->update($id, $data);
    }

    public function deleteUser($id)
    {
        return $this->mapper->delete($id);
    }
}
