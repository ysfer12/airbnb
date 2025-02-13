<?php

namespace App\Controllers\front;

use App\Models\PropertyModel;
use Core\Session\Session;
use Core\Validation\Validator;

class PropertyController
{
  private PropertyModel $propertyModel;

  public function __construct()
  {
    $this->propertyModel = new PropertyModel();
  }

  public function displayAddPage()
  {
    view('back/propertyadd');
    exit;
  }

  public function displayLatestTen()
  {
    $properties = $this->propertyModel->displayLatestTen();

    $data = [
      'title' => 'home',
      'properties' => $properties,
    ];

    view('front/home', $data);
  }

  public function displayProperty()
  {
    $properties = $this->propertyModel->displayProperty();

    $data = [
      'title' => 'Property',
      'properties' => $properties,
    ];

    view('front/home', $data);
  }

  public function createProperty()
  {
    $data = [
      'title' => 'Tamaris Club',
      'description' => 'Grands et belles propriétés avec vue imprenable sur la mer.',
      'price' => 150,
      'photos' => '{1.png, 2.png, 3.png}',
      'address' => 'Marrakech, Casa Blanca, Morocco',
      'bedrooms' => 5,
      'bathrooms' => 4,
      'is_validated' => true,
      'is_available' => true,
      'created_at' => '2022-10-15',
      'owner_id' => 3,
      'category_id' => 7,
      'latitude' => 33.5897,
      'longitude' => -7.6038,
      'max_guests' => 10,
      'amenities' => '{wifi, pool, gym, parking, air conditioning}',
      'house_rules' => 'No smoking, no pets, check-in after 3pm, check-out before 11am',
      'availability_dates' => json_encode([
        'start_date' => '2025-01-01',
        'end_date' => '2025-12-31',
      ]),
      'base_price' => 120,
      'minimum_stay' => 3,
      'maximum_stay' => 30,
      'cancellation_policy' => 'Full refund up to 7 days before check-in.',
      'updated_at' => '2025-02-12',
    ];

    $validator = new Validator($data);

    if ($validator->isErrors()) {
      Session::setSession('errorAdd', $validator->getErrors());
      redirect('');
      exit;
    }

    $createdProperty = $this->propertyModel->creatProperty($data);

    if (!$createdProperty) {
      Session::setSession('errorAdd', 'Property not added.');
    }

    redirect('');
    exit;
  }

  public function updateProperty()
  {
    $data = [
      'id' => 8,
      'title' => 'Tamaris Clubs',
      'description' => 'Grands et belles propriétés avec vue imprenable sur la mer.',
      'price' => 150,
      'photos' => '{1.png, 2.png, 3.png}',
      'address' => 'Marrakech, Casa Blanca, Morocco',
      'bedrooms' => 5,
      'bathrooms' => 4,
      'is_validated' => true,
      'is_available' => true,
      'created_at' => '2022-10-15',
      'owner_id' => 3,
      'category_id' => 7,
      'latitude' => 33.5897,
      'longitude' => -7.6038,
      'max_guests' => 10,
      'amenities' => '{wifi, pool, gym, parking, air conditioning}',
      'house_rules' => 'No smoking, no pets, check-in after 3pm, check-out before 11am',
      'availability_dates' => json_encode([
        'start_date' => '2025-01-01',
        'end_date' => '2025-12-31',
      ]),
      'base_price' => 120,
      'minimum_stay' => 3,
      'maximum_stay' => 30,
      'cancellation_policy' => 'Full refund up to 7 days before check-in.',
      'updated_at' => '2025-02-12',
    ];

    $validator = new Validator($data);

    if ($validator->isErrors()) {
      Session::setSession('errorUpdateValidator', $validator->getErrors());
      redirect('');
      exit;
    }

    $updatedProperty = $this->propertyModel->updateProperty($data);

    if (!$updatedProperty) {
      Session::setSession('errorUpdate', 'Property not updated.');
      return;
    }

    dump('Update success.');
    exit;
  }

  public function deleteProperty()
  {
    $id = 8;

    $validator = new Validator(['id' => $id]);

    if ($validator->isErrors()) {
      Session::setSession('errorDeleteValidator', $validator->getErrors());
      return;
    }

    $deletedProperty = $this->propertyModel->deleteProperty($id);

    if (!$deletedProperty) {
      Session::setSession('errorDelete', 'Property not deleted.');
      return;
    }

    dump('Delete success.');
    exit;
  }

  public function searchProperty()
  {
    header('Content-Type: application/json');

    $json = file_get_contents('php://input');
    $search = json_decode($json, true);

    $validator = new Validator(['title' => $search['search'] ?? '']);

    if ($validator->isErrors()) {
      echo json_encode(['success' => false, 'message' => $validator->getErrors()]);
      exit;
    }

    $searchProperty = $this->propertyModel->searchProperty($search['search'] ?? '');

    echo json_encode(['success' => true, 'data' => $searchProperty]);
    exit;
  }

  public function getPropertyById()
  {
    
    $id = 1;

    $validator = new Validator(['id' => $id]);

    if ($validator->isErrors()) {
      Session::setSession('errorGetByIdValidator', $validator->getErrors());
      exit;
    }

    $property = $this->propertyModel->getPropertyById($id);

    if (!$property) {
      Session::setSession('errorGetById', 'Property not found by ID.');
      exit;
    }



    // call view :


  }




  // viewStatistiques :
  public function viewStatistiques()
  {


    $dataStatic = [];

    $getTotalProperties = $this->propertyModel->getTotalProperties();
    $dataStatic['totalProperties'] = $getTotalProperties;


    $getAvailabilityStats = $this->propertyModel->getAvailabilityStats();
    $dataStatic['AvailabilityStats'] = $getAvailabilityStats;


    $getAveragePrice = $this->propertyModel->getAveragePrice();
    $dataStatic['AveragePrice'] = $getAveragePrice;


    $getPropertiesByCategory = $this->propertyModel->getPropertiesByCategory();
    $dataStatic['PropertiesByCategory'] = $getPropertiesByCategory;


    $getPropertiesPerOwner = $this->propertyModel->getPropertiesPerOwner();
    $dataStatic['PropertiesPerOwner'] = $getPropertiesPerOwner;
    

    
    dump($dataStatic);


  } 



  // validateProperty :




}
