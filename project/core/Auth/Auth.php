<?php 
 
namespace Core\Auth;

use Core\Session\Session;


class Auth
{


  public static function isLoggedIn()
  {
    Session::startSession();
    return Session::getSession('user_id') !== null;
  }



  public static function getRole()
  {
    return Session::getSession('role');
  }

  
  public static function logout()
  {
    Session::distroySession();
  }


  



}



// --------------------------------
// user_id
// role
// user_name