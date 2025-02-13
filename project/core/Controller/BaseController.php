<?php


namespace Core\Controller;

// use Core\Mapper\Mapper;

class BaseController
{
  public function __construct()
  {
      // Initialisation de base pour tous les contrôleurs
  }
  protected function jsonResponse($data, $statusCode = 200)
  {

    header('Content-Type: application/json');

    http_response_code($statusCode);

    echo json_encode($data);

    exit();
  }
  
  // redirect to error msg





}
