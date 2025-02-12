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

    public function auth()
    {
        // Create Google Client object
        $client = new Client;
        $client->setClientId("457967574662-5iqusjog4kbnid94qkc7clqo1sphqufa.apps.googleusercontent.com");
        $client->setClientSecret("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");
        $client->setRedirectUri("http://localhost:8080/addInformation");

        // Add Google OAuth scopes
        $client->addScope("email");
        $client->addScope("profile");

        // Generate the Google OAuth URL
        $url = $client->createAuthUrl();

        view('front/auth', ['url' => $url]);
        exit;
    }

    public function addInformation()
    {

        $client = new Client;
        $client->setClientId("457967574662-5iqusjog4kbnid94qkc7clqo1sphqufa.apps.googleusercontent.com");
        $client->setClientSecret("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");
        $client->setRedirectUri("http://localhost:8080/addInformation");
        
        if(!isset($_GET["code"]))
        {
            $this->auth();

            exit ("login failed");
        }

        $token = $client->fetchAccessTokenWithAuthCode($_GET["code"]);
        $client->setAccessToken($token["access_token"]);
        $oauth = new Google_Service_Oauth2($client);
        $userinfo = $oauth->userinfo->get();
        // var_dump($userinfo->email,
        //         $userinfo->familyName,
        //         $userinfo->givenName,
        //         $userinfo->name);
                view('front/addInformation', ['email' => $userinfo->email , 'familyname' => $userinfo->familyName , 'givenName' => $userinfo->givenName , 'name' => $userinfo->name]);


    }
}
?>
