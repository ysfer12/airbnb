<?php 


namespace Core\Mapper;

use App\Entities\User;


class UserMapper
{


  public static function mapUser($data)
  {
    $user = new User();
    if (isset($data['user_id'])) {
        $user->setId($data['user_id']);
    }
    if (isset($data['user_name'])) {
        $user->setName($data['user_name']);
    }
    if (isset($data['user_email'])) {
        $user->setEmail($data['user_email']);
    }
    if (isset($data['user_phone'])) {
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



