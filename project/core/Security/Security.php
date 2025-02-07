<?php


namespace Core\Security;

use Core\Session\Session;


class Security
{



  public static function sanitize($input)
  {
    return htmlspecialchars($input);
  }

  public static function hashPasswoard($password)
  {
    return password_hash($password, PASSWORD_DEFAULT);
  }

  public static function verifyPassword($password, $hashedPassword)
  {
    return password_verify($password, $hashedPassword);
  }

  // // generate token for csrf:
  // public static function generateCSRF()
  // {
  //   if (!Session::getSession('csrf_token')) {
  //     Session::setSession('csrf_token', bin2hex(random_bytes(32)));
  //   }
  //   return Session::getSession('csrf_token');
  // }

}
