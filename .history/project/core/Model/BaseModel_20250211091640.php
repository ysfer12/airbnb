<?php


namespace Core\Model;

use Core\Database\Database;

class BaseModel
{

  protected $conn;


  public function __construct()
  {
    Database::getConnection();
  }



  public function query($sql, $params = [])
  {
    $stmt = $this->conn->prepare($sql);
    $stmt->execute($params);
    return $stmt;
  }

  protected function fetchRow(string $query, array $params = []): ?array
  {
      // Implement the logic to fetch a single row from the database
      // This is just a placeholder implementation
      $stmt = $this->db->prepare($query);
      $stmt->execute($params);
      return $stmt->fetch();
  }


}
