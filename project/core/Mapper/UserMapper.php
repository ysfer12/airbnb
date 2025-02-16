<?php 


namespace Core\Mapper;

use App\Entities\User;


class UserMapper
{


  public static function mapUser($data)
  {
    $user = new User();
    $user->setId($data['id'] ?? null);
    $user->setName($data['name'] ?? null);
    $user->setEmail($data['email'] ?? null);
    $user->setPhone($data['phone'] ?? null);
    $user->setRole($data['role'] ?? null);
    $user->setIsActive($data['isActive'] ?? null);
    $user->setCreatedAt($data['createdAT'] ?? null);
    $user->setDeletedAt($data['deletedAt'] ?? null);

    return $user;
  }
  

}



