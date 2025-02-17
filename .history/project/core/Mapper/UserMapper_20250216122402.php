<?php 


namespace Core\Mapper;

use App\Entities\User;


class UserMapper
{


  public static function mapUser($data)
  {
    $user = new User();
    if (isset($data['user_id'])) {
        $user->setId($data['user']);
    }
    if (isset($data['name'])) {
        $user->setName($data['name']);
    }
    if (isset($data['email'])) {
        $user->setEmail($data['email']);
    }
    if (isset($data['phone'])) {
        $user->setPhone($data['phone']);
    }
    if (isset($data['role'])) {
        $user->setRole($data['role']);
    }
    if (isset($data['isActive'])) {
        $user->setIsActive($data['isActive']);
    }
    if (isset($data['createdAT'])) {
        $user->setCreatedAt($data['createdAT']);
    }
    if (isset($data['deletedAt'])) {
        $user->setDeletedAt($data['deletedAt']);
    }

    return $user;
  }
  

}



