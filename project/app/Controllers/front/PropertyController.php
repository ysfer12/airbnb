<?php

namespace App\Controllers\front;

use App\Models\PropertyModel;

use Core\Session\Session;
use Core\Validation\Validator;

class PropertyController
{

  private $PropertyModel;

  public function __construct()
  {
    $this->PropertyModel = new PropertyModel();
  }


  public function diplayAddPage()
  { 
    view('back/propertyadd');
    exit;
  }

  // display Latest 10:
  public function displayLatestTen()
  {
    $propertys = $this->PropertyModel->displayLatestTen();

    // dump($propertys[1]);

    $data = [
      'title' => 'home',
      'propertys' => $propertys
    ];


    view('front/home', $data);
  }



  // displayProperty:
  public function displayProperty()
  {
    $propertys = $this->PropertyModel->displayProperty();

    $data = [
      'title' => 'Property',
      'propertys' => $propertys
    ];


    view('front/home', $data);
  }


  // creatProperty:
  public function creatProperty()
  {



    // "column_name property"
    // "id"
    // "title"
    // "description"
    // "price"
    // "category_id"
    // "photos"
    // "is_validated"
    // "is_available"
    // "owner_id"
    // "address"
    // "latitude"
    // "longitude"
    // "max_guests"
    // "bedrooms"
    // "bathrooms"
    // "amenities"
    // "house_rules"
    // "availability_dates"
    // "base_price"
    // "minimum_stay"
    // "maximum_stay"
    // "cancellation_policy"
    // "created_at"
    // "updated_at"


    $data = [
      'title' => 'Tamaris Club',
      'description' => 'Grands et belles propriétés avec vue imprenable sur la mer.',
      'price' =>  150,
      'photos' => '{1.png, 2.png, 3.png}',
      'address' => 'Marrakech, Casa Blanca, Morocco',
      'bedrooms' => 5,
      'bathrooms' => 4,
      'is_validated' => 'true',
      'is_available' => 'true',
      'created_at' => '2022/10/15',
      // 'rating' => '4.8',
      'owner_id' => 3,
      'category_id' => 7,
      'latitude' => 33.5897,
      'longitude' => -7.6038,
      'max_guests' => 10,
      'amenities' => '{wifi, pool, gym, parking, air conditioning}',
      'house_rules' => 'No smoking, no pets, check-in after 3pm, check-out before 11am',
      'availability_dates' => json_encode([
                              'start_date' => '2025/01/01',
                              'end_date' => '2025/12/31']),
      'base_price' => 120,
      'minimum_stay' => 3,
      'maximum_stay' => 30,
      'cancellation_policy' => 'Full refund up to 7 days before check-in.',
      'updated_at' => '2025/02/12',
    ];


    // call validator:
    $validatorAdd = new Validator($data);



    if ($validatorAdd->isErrors()) {
      Session::setSession('errorAdd', $validatorAdd->getErrors());


      redirect('');

      dump(Session::getSession('errorAdd'));

      exit;
    }


    dump(Session::getSession('errorAdd'));

    $creatProperty = $this->PropertyModel->creatProperty($data);

    if (!$creatProperty) {

      Session::setSession('errorAdd', 'property not added');
    
    }
    
    
    redirect('');
    exit;
    // redirect('home');
  }


  // updateProperty :

  public function updateProperty()
  {
    $data = [
      'id'=> 8,
      'title' => 'Tamaris Clubs',
      'description' => 'Grands et belles propriétés avec vue imprenable sur la mer.',
      'price' =>  150,
      'photos' => '{1.png, 2.png, 3.png}',
      'address' => 'Marrakech, Casa Blanca, Morocco',
      'bedrooms' => 5,
      'bathrooms' => 4,
      'is_validated' => 'true',
      'is_available' => 'true',
      'created_at' => '2022/10/15',
      // 'rating' => '4.8',
      'owner_id' => 3,
      'category_id' => 7,
      'latitude' => 33.5897,
      'longitude' => -7.6038,
      'max_guests' => 10,
      'amenities' => '{wifi, pool, gym, parking, air conditioning}',
      'house_rules' => 'No smoking, no pets, check-in after 3pm, check-out before 11am',
      'availability_dates' => json_encode([
                              'start_date' => '2025/01/01',
                              'end_date' => '2025/12/31']),
      'base_price' => 120,
      'minimum_stay' => 3,
      'maximum_stay' => 30,
      'cancellation_policy' => 'Full refund up to 7 days before check-in.',
      'updated_at' => '2025/02/12',
    ];


    
    // call validator:
    $validatorUpdate = new Validator($data);


    if ($validatorUpdate->isErrors()) {
      Session::setSession('errorUpdate', $validatorUpdate->getErrors());


      redirect('');

      dump(Session::getSession('errorUpdate'));

      exit;
    }


    // dump(Session::getSession('errorUpdate'));

    $updateProperty = $this->PropertyModel->updateProperty($data);

    if (!$updateProperty) {

      Session::setSession('errorUpdate', 'property not updated');
      return;
      
    }

    // redirect('');
    
    dump('update success');

    exit;


  }







  // deleteProperty :
  public function deleteProperty()
  {
    $id = 8;

    $deleteProperty = $this->PropertyModel->deleteProperty($id);

    if (!$deleteProperty) {

      Session::setSession('errorDelete', 'property not deleted');
      
      return;
    }

    dump('delete success');

    exit;
  }




  // searchProperty
  public function searchProperty()
  {

    header('Content-Type: application/json');

    $json = file_get_contents("php://input");
    $search = json_decode($json, true);


    $search['search'] = 'tamaris';
    

    $validatorSearch = new Validator(['title' => $search['search']]);
  
    if (!$validatorSearch) {
      echo json_encode(['success' => false, 'message' => 'data not valid']);      
    }
    

    $searchProperty = $this->PropertyModel->searchProperty($search['search']);


    // echo json_encode(['success' => true, 'data' => $searchProperty]);

    echo json_encode(['data' => $searchProperty]);

    exit;
  }



  // getById :

  // getByName :

  // validateProperty :

  // viewStatistiques :



}
