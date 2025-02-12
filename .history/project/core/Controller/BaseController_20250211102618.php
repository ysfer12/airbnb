<?php


namespace Core\Controller;

// use Core\Mapper\Mapper;

class BaseController
{

  protected function jsonResponse($data, $statusCode = 200)
  {

    header('Content-Type: application/json');

    http_response_code($statusCode);

    echo json_encode($data);

    exit();
  }

}
