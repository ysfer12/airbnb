<?php

namespace App\Models;

use Core\Model\BaseModel;
use Core\Mapper\PropertyMapper;

class PropertyModel extends BaseModel
{


  // display Latest 10:
  public function displayLatestTen()
  {
    $data = $this->query("SELECT
                              properties.id, 
                              properties.title, 
                              properties.price, 
                              properties.address, 
                              properties.bedrooms, 
                              properties.bathrooms,
                              properties.created_at,
                              MAX(reviews.rating)
                          FROM properties
                              LEFT JOIN bookings ON bookings.property_id = properties.id
                              LEFT JOIN reviews ON reviews.booking_id = bookings.id
                          GROUP BY
                              properties.id, properties.title
                          ORDER BY properties.created_at DESC
                          LIMIT 10;");


    $data = $data->fetchAll();

    // return $data;

    // dump($data);

    // return 
    PropertyMapper::mapProperty($data);

  }



  // displayProperty:

  // creatProperty:

  // updateProperty :

  // deleteProperty :

  // getById :

  // getByName :

  // validateProperty :

  // viewStatistiques :




}
