<?php 


namespace Core\Mapper;

use App\Entities\Property;


class PropertyMapper
{
  
  public static function mapProperty($data)
  {
    $property = new Property();
    $property->setId($data['id']);
    $property->setTitle($data['Title']);
    $property->setDescription($data['Description']);
    $property->setPrice($data['Price']);
    $property->setPhotos($data['Photos']);
    $property->setIsValidated($data['IsValidated']);
    $property->setIsAvailable($data['IsAvailable']);


    // call mapper user:
    $UserData = [
      'id'=> $data['id'],
      'name'=> $data['name'],
      'email'=> $data['email']
    ];

    $property->setOwner(UserMapper::mapUser($UserData));
    


    // call mapper category:
    $CategoryData = [
      'id'=> $data['id'],
      'name'=> $data['name'],
      'description'=> $data['description']
    ];

    $property->setCategory(CategoryMapper::mapCategory($CategoryData));




    return $property;
  }

  

}



