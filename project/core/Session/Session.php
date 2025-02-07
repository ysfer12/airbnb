<?php


namespace Core\Session;


class Session
{

  public static function startSession()
  {
    if (session_status() === PHP_SESSION_NONE) {
      session_start();
    }
  }

  public static function getSession($key)
  {
    return $_SESSION[$key] ?? null;
  }

  public static function setSession($sessionKey, $sessionValue)
  {
    $_SESSION[$sessionKey] = $sessionValue;
  }

  public static function unsetSession($sessionKey)
  {
    unset($_SESSION[$sessionKey]);
  }

  public static function distroySession()
  {
    session_unset();
    session_destroy();
  }
}
