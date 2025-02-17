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

        
        
    }

}
