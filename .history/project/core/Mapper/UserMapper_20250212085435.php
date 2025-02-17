<?php 


namespace Core\Mapper;

use App\Entities\User;


class UserMapper
{


  public static function mapUser($data)
  {
    $user = new User();
    $user->setId($data['id']);
    $user->setName($data['name']);
    $user->setEmail($data['email']);
    $user->setPhone($data['phone']);
    $user->setRole($data['role']);
    $user->setIsActive($data['isActive']);
    $user->setCreatedAt($data['createdAT']);
    $user->setDeletedAt($data['deletedAt']);

    return $user;
  }
  

}



