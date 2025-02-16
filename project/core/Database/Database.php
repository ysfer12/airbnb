<?php


namespace Core\Database;

use Dotenv\Dotenv;
use PDO;
use PDOException;

class Database
{
    private static $pdoSinglton;

    public static function getConnection()
    {
        // Check if the connection already exists and return it
        if (self::$pdoSinglton != null) {
            return self::$pdoSinglton;
        }


        $servername = $_ENV['DB_HOST'];
        $port = $_ENV['DB_PORT'];
        $databasename = $_ENV['DB_NAME'];        
        $username = $_ENV['DB_USER'];
        $password = $_ENV['DB_PASSWORD'];

        // Build connection string
        $conStr = sprintf(
            "pgsql:host=%s;port=%d;dbname=%s;user=%s;password=%s",
            $servername,
            $port,
            $databasename,
            $username,
            $password
        );

        
        try {

            $conn = new PDO($conStr);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            self::$pdoSinglton = $conn;
            
            return self::$pdoSinglton;

            return self::$pdoSinglton;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null; // Return null on failure
        }
    }
}
