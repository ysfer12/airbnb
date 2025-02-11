<?php 


  echo 'start -- ';

  
  
  require_once dirname(__DIR__) . '/vendor/autoload.php';
  
 
  use Dotenv\Dotenv;
  use Core\App;

  
  $dotenv = Dotenv::createImmutable(dirname(__DIR__));  
  $dotenv->load();
  

  
  echo $_ENV['APP_NAME'];
  




  
  App::run();
  
?>