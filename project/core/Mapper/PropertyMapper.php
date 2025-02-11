<?php 


namespace Core\Mapper;

use App\Entities\Property;


class PropertyMapper
{
  
  public static function mapProperty($data)
  {
    dump($data);

    $property = new Property();
    $property->setId($data['id'] ?? null);
    $property->setTitle($data['Title'] ?? null);
    $property->setDescription($data['Description'] ?? null);
    $property->setPrice($data['Price'] ?? null);
    $property->setPhotos($data['Photos'] ?? null);
    $property->setIsValidated($data['IsValidated'] ?? null);
    $property->setIsAvailable($data['IsAvailable'] ?? null);


    // call mapper user:
    $UserData = [
      'id'=> $data['id'] ?? null,
      'name'=> $data['name'] ?? null,
      'email'=> $data['email'] ?? null
    ];

    $property->setOwner(UserMapper::mapUser($UserData));
    


    // call mapper category:
    $CategoryData = [
      'id'=> $data['id'] ?? null,
      'name'=> $data['name'] ?? null,
      'description'=> $data['description'] ?? null
    ];

    $property->setCategory(CategoryMapper::mapCategory($CategoryData));




    return $property;
  }

  

}



