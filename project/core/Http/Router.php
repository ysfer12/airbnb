<?php

namespace Core\Http;


class Router
{


  private static $routes = [];


  public static function get($route, $action)
  {
    self::$routes['GET'][$route] = $action;
  }


  public static function post($route, $action)
  {
    self::$routes['POST'][$route] = $action;
  }

  public static function put($route, $action)
  {
    self::$routes['PUT'][$route] = $action;
  }  

  public static function patch($route, $action)
  {
    self::$routes['PATCH'][$route] = $action;
  }

  public static function delete($route, $action)
  {
    self::$routes['DELETE'][$route] = $action;
  }





  // handling Routes:
  public static function RouteHandlers($requestRoute, $requestMethod)
  {

    $requestRoute = str_replace('index.php', '', $requestRoute);
    $requestRoute = str_replace('public', '', $requestRoute);
    $requestRoute = trim($requestRoute, '/');


    // match router :
    $match = self::matchRoute($requestRoute, $requestMethod);
    


    if ($match) {
      [$action, $params] = $match;

      if (is_callable($action)) {
        return call_user_func($action);
      }


      if (is_string($action)) {
        $actionArr = explode('@', $action);
        
        $controllerClass = "App\\Controllers\\$actionArr[0]";

        if (!class_exists($controllerClass)) {
          echo 'class not exist';
          return;
        }

        if (!method_exists($controllerClass, $actionArr[1])) {
          echo 'method not exist';
          return;
        }



        return call_user_func_array([new $controllerClass, $actionArr[1]], $params ?? []);
      }
    } else {
      // include : page 404 errors.
      view('errors/404');
      exit;
    }
  }



  // match routes:
  private static function matchRoute($requestRoute, $requestMethod)
  {
    foreach (self::$routes[$requestMethod] ?? [] as $patterneRoute => $action) {

      $route = preg_replace('/\{[a-zA-Z_]+\}/', '(\d+)', $patterneRoute);

      if (preg_match('#^' . $route . '$#', $requestRoute, $matches)) {
        array_shift($matches);
        return [$action, $matches];
      }
    }
  }
}
