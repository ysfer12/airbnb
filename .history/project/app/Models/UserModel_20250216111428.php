<?php

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\UserMapper;

class UserModel extends BaseModel
{

    public function getAllUsers()
    {

        $data = $this->conn->query(
            "SELECT users.id as user_id, users.name as user_name, users.email as user_email, roles.name as user_role 
             FROM users"
        );
        $data = $data->fetchAll();

        if (!$data) {
            return [];
        }

        $results = [];
        foreach ($data as $row) {
            $results[] = UserMapper::mapUser($row);
        }

        return $results;
        
    }

}
