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

    public function getPropertyById($id)
    {
        // Validate ID
        $validator = new Validator(['id' => $id]);

        if ($validator->isErrors()) {
            Session::setSession('error', $validator->getErrors());
            redirect('property');
            exit;
        }

        // Get property data
        $property = $this->PropertyModel->getPropertyById($id);

        if (!$property) {
            Session::setSession('error', 'Property not found');
            redirect('property');
            exit;
        }

        // Check if user is logged in for booking
        $isLoggedIn = Session::getSession('user_id') ? true : false;

        // Prepare data for view
        $data = [
            'title' => $property->getTitle(),
            'property' => $property,
            'isLoggedIn' => $isLoggedIn
        ];

        // Render the view
        view('front/property_details', $data);
        exit;
    }

    public function displayLatestTen()
    {
        $properties = $this->PropertyModel->displayLatestTen();

        $data = [
            'title' => 'home',
            'properties' => $properties
        ];

        view('front/property', $data);
    }

    public function displayProperty()
    {
        $properties = $this->PropertyModel->displayProperty();

        $data = [
            'title' => 'Property',
            'properties' => $properties
        ];

        view('front/property', $data);
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

        $createdProperty = $this->PropertyModel->creatProperty($data);

        if (!$createdProperty) {
            Session::setSession('errorAdd', 'Property not added.');
        }

        redirect('');
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

        $searchResult = $this->PropertyModel->searchProperty($search['search'] ?? '');

        echo json_encode(['success' => true, 'data' => $searchResult]);
        exit;
    }

    public function checkAvailability($id)
    {
        header('Content-Type: application/json');

        $json = file_get_contents('php://input');
        $data = json_decode($json, true);

        $validator = new Validator([
            'check_in' => $data['check_in'],
            'check_out' => $data['check_out']
        ]);

        if ($validator->isErrors()) {
            echo json_encode(['success' => false, 'message' => $validator->getErrors()]);
            exit;
        }

        $property = $this->PropertyModel->getPropertyById($id);

        if (!$property) {
            echo json_encode(['success' => false, 'message' => 'Property not found']);
            exit;
        }

        // Check if property is available for the dates
        $isAvailable = $this->PropertyModel->checkAvailability(
            $id,
            $data['check_in'],
            $data['check_out']
        );

        echo json_encode([
            'success' => true,
            'available' => $isAvailable,
            'minimum_stay' => $property->getMinimumStay(),
            'maximum_stay' => $property->getMaximumStay()
        ]);
        exit;
    }

    public function getBookedDates($id)
    {
        header('Content-Type: application/json');

        $bookedDates = $this->PropertyModel->getBookedDates($id);

        echo json_encode([
            'success' => true,
            'dates' => $bookedDates
        ]);
        exit;
    }
}