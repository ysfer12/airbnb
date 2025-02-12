<?php

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\PropertyMapper;

class PropertyModel extends BaseModel
{


  // display Latest 10:
  public function displayLatestTen()
  {
    $stmt = $this->query("SELECT
                              properties.id, 
                              properties.title, 
                              properties.price, 
                              properties.photos,
                              properties.address, 
                              properties.bedrooms, 
                              properties.bathrooms,
                              properties.created_at,
                              properties.is_available,
                              properties.is_validated,	
                              MAX(reviews.rating),
                              users.id as owner_id,
                              users.name as owner_name,
                              users.email as owner_email,
                              categories.id as category_id,
                              categories.name as category_name
                          FROM properties
                              LEFT JOIN users on users.id = properties.owner_id
                              LEFT JOIN categories on categories.id = properties.category_id
                              LEFT JOIN bookings ON bookings.property_id = properties.id
                              LEFT JOIN reviews ON reviews.booking_id = bookings.id
                          GROUP BY
                              properties.id, properties.title, users.name, users.id, categories.id
                          ORDER BY properties.created_at DESC
                          LIMIT 10;");


    $data = $stmt->fetchAll();
    

    $Propertys = [];
    foreach ($data as $keyData => $valueData) {
      
      $Propertys[] = PropertyMapper::mapProperty($valueData);
    }
    

    return $Propertys;
  }



  // displayProperty:
  public function displayProperty()
  {
    $stmt = $this->query("SELECT
                          properties.id, 
                          properties.title, 
                          properties.price, 
                          properties.photos,
                          properties.address, 
                          properties.bedrooms, 
                          properties.bathrooms,
                          properties.created_at,
                          properties.is_available,
                          properties.is_validated,	
                          MAX(reviews.rating),
                          users.id as owner_id,
                          users.name as owner_name,
                          users.email as owner_email,
                          categories.id as category_id,
                          categories.name as category_name
                      FROM properties
                          LEFT JOIN users on users.id = properties.owner_id
                          LEFT JOIN categories on categories.id = properties.category_id
                          LEFT JOIN bookings ON bookings.property_id = properties.id
                          LEFT JOIN reviews ON reviews.booking_id = bookings.id
                      GROUP BY
                          properties.id, properties.title, users.name, users.id, categories.id");

    $data = $stmt->fetchAll();

    
    $Propertys = [];
    foreach ($data as $keyData => $valueData) {
      
      $Propertys[] = PropertyMapper::mapProperty($valueData);
    }
    

    return $Propertys;

  }



  // creatProperty:

  // updateProperty :

  // deleteProperty :

  // getById :

  // getByName :

  // validateProperty :

  // viewStatistiques :




}
