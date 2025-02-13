<?php 

namespace App\Controllers\front;



// Import Google API Client

use App\Models\AuthModel;
use Google\Client;
use Google\Service\Oauth2 as Google_Service_Oauth2;

class AuthController
{

    public function auth()
    {
        $client = new Client;
        $client->setClientId("457967574662-5iqusjog4kbnid94qkc7clqo1sphqufa.apps.googleusercontent.com");
        $client->setClientSecret("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");
        $client->setRedirectUri("http://localhost:8080/addInformation");

        $client->addScope("email");
        $client->addScope("profile");

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

    public function addUser()
    {
        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            if(isset($_POST["email"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["phonenumber"]) && isset($_FILES["profileImage"]))
            {
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                $password = $_POST["password"];
                $phone = $_POST["phonenumber"];
                $role = $_POST["role"] ?? "traveler";
                $image = $_FILES["profileImage"];

                $authModel = new AuthModel();
                $result = $authModel->createUser($fullname, $email, $password, $phone, $role, $image);

                if ($result === true) {
                    echo "✅ User registered successfully!";
                } else {
                    echo "❌ Error: " . $result; // Display the specific error message
                }

            }else {
                echo "❌ Please fill in all required fields.";
            }
        }
    }
}
?>
