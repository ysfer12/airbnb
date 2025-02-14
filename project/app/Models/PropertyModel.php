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
                              MAX(reviews.rating) as rating,
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
                          MAX(reviews.rating) as rating,
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
  public function creatProperty($data)
  {



    $query = "INSERT INTO properties (
              title, description, price, photos, address, bedrooms, bathrooms, is_validated, 
              is_available, created_at, owner_id, category_id, latitude, longitude, 
              max_guests, amenities, house_rules, availability_dates, base_price, minimum_stay, 
              maximum_stay, cancellation_policy, updated_at
              ) VALUES (
                  :title, :description, :price, :photos, :address, :bedrooms, :bathrooms, :is_validated, 
                  :is_available, :created_at, :owner_id, :category_id, :latitude, :longitude, 
                  :max_guests, :amenities, :house_rules, :availability_dates, :base_price, :minimum_stay, 
                  :maximum_stay, :cancellation_policy, :updated_at
              )";

    $stmt = $this->query($query, $data);
    return $stmt->lastInsertId();
  }


  // updateProperty :
  public function updateProperty($data)
  {

    $query = "UPDATE properties SET 
              title = :title, 
              description = :description, 
              price = :price, 
              photos = :photos, 
              address = :address, 
              bedrooms = :bedrooms, 
              bathrooms = :bathrooms, 
              is_validated = :is_validated, 
              is_available = :is_available, 
              created_at = :created_at, 
              owner_id = :owner_id, 
              category_id = :category_id, 
              latitude = :latitude, 
              longitude = :longitude, 
              max_guests = :max_guests, 
              amenities = :amenities, 
              house_rules = :house_rules, 
              availability_dates = :availability_dates, 
              base_price = :base_price, 
              minimum_stay = :minimum_stay, 
              maximum_stay = :maximum_stay, 
              cancellation_policy = :cancellation_policy, 
              updated_at = :updated_at 
          WHERE id = :id";

    $stmt = $this->query($query, $data);
    return $stmt->rowCount() > 0;
  }



  // deleteProperty :
  public function deleteProperty($id)
  {
    $this->query("ALTER TABLE properties DISABLE TRIGGER ALL");

    $query = "DELETE FROM properties WHERE id = :id";
    $stmt = $this->query($query, ['id' => $id]);

    $this->query("ALTER TABLE properties ENABLE TRIGGER ALL");

    return $stmt->rowCount() > 0;
  }



  // searchProperty
  public function searchProperty($search)
  {

    $query = "SELECT
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
                MAX(reviews.rating) as rating,
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
              WHERE 
                  LOWER(properties.title) LIKE LOWER(:search) 
                  OR LOWER(properties.address) LIKE LOWER(:search) 
                  OR LOWER(categories.name) LIKE LOWER(:search)
              GROUP BY
                  properties.id, properties.title, users.name, users.id, categories.id";

    $stmt = $this->query($query, ['search' => "%$search%"]);


    $data = $stmt->fetchAll();

    $Propertys = [];
    foreach ($data as $keyData => $valueData) {

      $Propertys[] = PropertyMapper::mapProperty($valueData);
    }


    return $Propertys;
  }



  // getPropertyById :
  public function getPropertyById($id)
  {
    $query = "SELECT 
                  properties.id, 
                  properties.title, 
                  properties.description, 
                  properties.price, 
                  properties.photos,
                  properties.address, 
                  properties.bedrooms, 
                  properties.bathrooms,
                  properties.is_validated, 
                  properties.is_available, 
                  properties.created_at, 
                  properties.owner_id, 
                  properties.category_id, 
                  properties.latitude, 
                  properties.longitude, 
                  properties.max_guests, 
                  properties.amenities, 
                  properties.house_rules, 
                  properties.availability_dates, 
                  properties.base_price, 
                  properties.minimum_stay, 
                  properties.maximum_stay, 
                  properties.cancellation_policy, 
                  properties.updated_at,
                  MAX(reviews.rating) as rating,
                  users.id as owner_id,
                  users.name as owner_name,
                  users.email as owner_email,
                  categories.id as category_id,
                  categories.name as category_name
              FROM properties
                  LEFT JOIN users ON users.id = properties.owner_id
                  LEFT JOIN categories ON categories.id = properties.category_id
                  LEFT JOIN bookings ON bookings.property_id = properties.id
                  LEFT JOIN reviews ON reviews.booking_id = bookings.id
              WHERE properties.id = :id
              GROUP BY 
                  properties.id, properties.title, users.name, users.id, categories.id";



    $stmt = $this->query($query, ['id' => $id]);

    $data =  $stmt->fetch();


    if (!$data) {
      return;
    }

    return PropertyMapper::mapProperty($data);
  }




  // viewStatistiques :
  public function getTotalProperties()
  {
    $query = "SELECT COUNT(*) AS total_properties FROM properties";
    $stmt = $this->query($query);
    return $stmt->fetch();
  }



  public function getAvailabilityStats()
  {
    $query = "SELECT COUNT(*) AS available_properties 
              FROM properties 
              WHERE is_available = true";
    $stmt = $this->query($query);
    return $stmt->fetchAll();
  }


  public function getAveragePrice()
  {
    $query = "SELECT ROUND(AVG(price), 2) AS avg_price FROM properties";
    $stmt = $this->query($query);
    return $stmt->fetch();
  }



  public function getPropertiesByCategory()
  {
    $query = "SELECT categories.name, COUNT(properties.id) AS total_properties
              FROM properties
              LEFT JOIN categories ON categories.id = properties.category_id
              GROUP BY categories.name";

    $stmt = $this->query($query);
    return $stmt->fetchAll();
  }



  public function getPropertiesPerOwner()
  {
    $query = "SELECT users.name, COUNT(properties.id) AS total_properties
              FROM properties
              LEFT JOIN users ON users.id = properties.owner_id
              GROUP BY users.name";
    $stmt = $this->query($query);
    return $stmt->fetchAll();
  }

  // validateProperty :





}
