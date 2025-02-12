<?php



namespace Core\Database;


use  Dotenv\Dotenv;
use PDO;
use PDOException;


class Database
{
    private static $conn;

    public static function getConnection()
    {
        if (self::$conn === null) {
            $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
            $dotenv->load();

            $host = $_ENV['DB_HOST'];
            $port = $_ENV['DB_PORT'];
            $dbname = $_ENV['DB_NAME'];
            $user = $_ENV['DB_USER'];
            $password = $_ENV['DB_PASSWORD'];

            $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
            try {
                self::$conn = new PDO($dsn, $user, $password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die('Connection failed: ' . $e->getMessage());
            }
        }
        return self::$conn;
    }
}

