<?php 

namespace App\Controllers\front;



// Import Google API Client

use App\Entities\User;
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
            if(isset($_POST["fullname"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["phonenumber"]) && isset($_FILES["profileImage"]) && isset($_POST["role"]))
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
                $error = ['error' => "❌ Please fill in all required fields."];
                view("front/auth" , $error);
            }
        }
    }

    public function loginUser()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST")
        {
            $email = $_POST["email"] ?? null;
            $password = $_POST["password"] ?? null;

            if (!$email || !$password) {
                echo "Email and password are required.";
                return;
            }

            $authuser = new AuthModel();
            $resault = $authuser->loginTheuser($email , $password);

            if($resault == null){
                echo "user not found please check ..."; 
            }else{
                $userInfo = new User;
                if($userInfo->getRole() == "admin")
                {

                }
                if($userInfo->getRole() == "traveler")
                {

                }
                if($userInfo->getRole() == "owner")
                {

                }
            }


        }
    }
}
?>
