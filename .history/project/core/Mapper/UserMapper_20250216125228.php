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
        $user->setPhone($data['user_phone']);
    }
    if (isset($data['user_role'])) {
        $user->setRole($data['user_role']);
    }
    if (isset($data['user_isActive'])) {
        $user->setIsActive($data['user_isActive']);
    }
    if (isset($data['user_'])) {
        $user->setCreatedAt($data['createdAT']);
    }
    if (isset($data['deletedAt'])) {
        $user->setDeletedAt($data['deletedAt']);
    }

    return $user;
  }
  

}



