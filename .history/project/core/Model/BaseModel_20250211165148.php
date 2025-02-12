<?php


namespace Core\Model;

use Core\Database\Database;

class BaseModel
{

  protected $conn;


  public function __construct()
  {
    $this->conn = Database::getConnection();
  }



  public function query($sql, $params = [])
  {
    $stmt = $this->conn->prepare($sql);
    $stmt->execute($params);
    return $stmt;
  }


}
