<?php
namespace App\Models;

use Core\Database\Database;
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

    public function createUser($fullname, $email, $password, $phone, $role, $image)
    {
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

        $isActive = ($role === "traveler") ? true : false;

        $sql = "INSERT INTO users (name, email, password, phone, role_id, is_active, profile_picture, created_at, deleted_at) 
                VALUES (?, ?, ?, ?, ?, ?, ?, NOW(), NULL)";
        
        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$fullname, $email, $hashedPassword, $phone, $roleId, $isActive, $imagePath]);
            return "✅ User registered successfully!";

            view("");
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
