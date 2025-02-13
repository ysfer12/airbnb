<?php 

namespace App\Controllers\front;

use App\Models\UserModels;
use Core\View\View;

// Import Google API Client
use Google\Client;
use Google\Service\Oauth2 as Google_Service_Oauth2;

class HomeControllers
{
    public function index()
    {
        $data = [
            'title' => 'MVC Home', 
            'last_name' => 'MylastName',
            'arr' => [1, 2, 3, 4]
        ];

        view('front/home', $data);
        exit;
    }

 
}
?>
