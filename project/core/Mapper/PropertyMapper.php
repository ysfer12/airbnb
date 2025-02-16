<?php 


namespace Core\Mapper;

use App\Entities\Property;


class PropertyMapper
{
  
  public static function mapProperty($data)
  {


    $property = new Property();

    $property->setId($data['id'] ?? null);
    $property->setTitle($data['title'] ?? null);
    $property->setDescription($data['description'] ?? null);
    $property->setPrice($data['price'] ?? null);
    $property->setAddress($data['address'] ?? null);
    $property->setPhotos($data['photos'] ?? null);
    $property->setBedrooms($data['bedrooms'] ?? null);
    $property->setBathrooms($data['bathrooms'] ?? null);
    $property->setIsValidated($data['is_validated'] ?? null);
    $property->setIsAvailable($data['is_available'] ?? null);
    $property->setRating($data['rating'] ?? null);


    // call mapper user:
    $ownerData = [
      'id'=> $data['owner_id'] ?? null,
      'name'=> $data['owner_name'] ?? null,
      'email'=> $data['owner_email'] ?? null
    ];

    $property->setOwner(UserMapper::mapUser($ownerData));
    


    // call mapper category:
    $CategoryData = [
      'id'=> $data['category_id'] ?? null,
      'name'=> $data['category_name'] ?? null,
      'description'=> $data['category_description'] ?? null
    ];
  
    $property->setCategory(CategoryMapper::mapCategory($CategoryData));



    return $property;
  }

  

}



