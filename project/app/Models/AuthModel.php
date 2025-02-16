<?php
namespace App\Models;

use App\Entities\User;
use Core\Database\Database;
use Core\Session\Session;
use Core\Mapper\UserMapper;
use PDO;
use PDOException;

class AuthModel
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function loginTheuser($email , $password)
    {
  
        Session::startSession();

        $query = "SELECT 
                    users.id as user_id, 
                    users.name , Username, 
                    users.email as email,
                    users.phone as phone,
                    users.deleted_at as deleted_at, 
                    users.profile_picture as profile_picture,
                    users.is_active as `validation`, 
                    users.password, 
                    users.created_at as created_at,
                    roles.name AS role, 
                    roles.id AS role_id
                  FROM 
                    users 
                  JOIN roles on roles.id = users.role_id
                  where users.email = :email";


        $stmt = $this->conn->prepare($query); 
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }      
        if (!password_verify($password, $row['password'])) {
            return null;
        }else{
            if($row["role"] == "owner")
            {
                Session::setSession("nameRole", $row["role"]);
                Session::setSession("roleIdOwner", $row["role_id"]);
                Session::setSession("ValidationOwner", $row["validation"]);
                Session::setSession("OwnerId", $row["user_id"]);
            }
            if($row["role"] == "traveler")
            {
                Session::setSession("nameRole", $row["role"]);
                Session::setSession("roleIdTraveler", $row["role_id"]);
                Session::setSession("ValidationTraveler", $row["validation"]);
                Session::setSession("TravelerId", $row["user_id"]);
            }
            if($row["role"] == "admin")
            {
                Session::setSession("nameRole", $row["role"]);
                Session::setSession("roleIdAdmin", $row["role_id"]);
                Session::setSession("ValidationAdmin", $row["validation"]);
                Session::setSession("AdminId", $row["user_id"]);
            }
            $Newdata = ["id" => $row["user_id"] , "name" => $row["Username"] , "email" => $row["email"] , "phone" => $row["phone"] , "role" => $row["role"] , "isActive" => $row["validation"] , "createdAT" => $row["created_at"] , "deletedAt" => $row["deleted_at"]]; 
            return UserMapper::mapUser($Newdata);
        }

                  
    }

   

    public function createUser($fullname, $email, $password, $phone, $role, $image)
    {
        // Validate password
        if (!$this->isValidPassword($password)) {
            return "Password must be at least 8 characters long, include an uppercase letter, a lowercase letter, a number, and a special character.";
        }
    
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
        $uploadDir = __DIR__ . "/../../public/uploads/";
        $imageName = time() . "_" . basename($image["name"]);
        $imagePath = "public/uploads/" . $imageName;
        $targetFile = $uploadDir . $imageName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
        $allowedTypes = ["jpg", "jpeg", "png", "gif"];
        if (!in_array($imageFileType, $allowedTypes)) {
            return "Invalid image format. Only JPG, JPEG, PNG, and GIF are allowed.";
        }
    
        if (!is_dir($uploadDir)) {
            if (!mkdir($uploadDir, 0755, true) && !is_dir($uploadDir)) {
                return "Failed to create upload directory.";
            }
        }
    
        if (!move_uploaded_file($image["tmp_name"], $targetFile)) {
            return "Failed to move uploaded file. Check folder permissions.";
        }
    

        $roleId = ($role === "owner") ? 2 : (($role === "traveler") ? 3 : null);
        if ($roleId === null) {
            return "Invalid role selected.";
        }
    

        $isActive = ($role === "owner") ? 0 : 1;

        $sql = "INSERT INTO users (name, email, password, phone, role_id, is_active, profile_picture, created_at, deleted_at) 
        VALUES (?, ?, ?, ?, ?, CAST(? AS BOOLEAN), ?, NOW(), NULL)";
        
        try {
            $stmt = $this->conn->prepare($sql);

            $stmt->execute([$fullname, $email, $hashedPassword, $phone, $roleId, $isActive, $imagePath]);
            view("front/auth");
            return true;
        } catch (PDOException $e) {
            return "❌ Database error: " . $e->getMessage();
        }
    }
    

    private function isValidPassword($password)
    {
        return preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[\W_]).{8,}$/', $password);
    }
    
    
}
?>
