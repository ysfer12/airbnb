<?php 


  // echo 'start -- ';
  // echo 'start -- ';

  
  
  require_once dirname(__DIR__) . '/vendor/autoload.php';
 
  use Dotenv\Dotenv;
  use Core\App;

  
  $dotenv = Dotenv::createImmutable(dirname(__DIR__));  
  $dotenv = Dotenv::createImmutable(dirname(__DIR__));  
  $dotenv->load();
  

  


  // echo $_ENV['APP_NAME'];
  // echo $_ENV['APP_NAME'];
  

  // dump(dirname(__DIR__).'/');


  
  
  



  
  App::run();
  
?>