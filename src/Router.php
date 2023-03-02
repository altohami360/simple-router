<?php

namespace Altohami\Router;

class Router implements RouterInterface
{

  protected $routes = [];

  public static function get($url, $controller)
  {
    self::add('GET', $url, $controller);
  }

  public static function post($url, $controller)
  {
    self::add('POST', $url, $controller);
  }

  public static function put($url, $controller)
  {
    self::add('PUT', $url, $controller);
  }

  public static function patch($url, $controller)
  {
    self::add('PATCH', $url, $controller);
  }

  public static function delete($url, $controller)
  {
    self::add('DELETE', $url, $controller);
  }

  public function add($method, $url, $controller)
  {
    $this->routes = [
      'method' => $method,
      'url' => $url,
      'controller' => $controller
    ];
  }

  public function route($url, $method)
  {
    foreach ($this->routes as $route) {
      if ($route['url'] == $url && $route['method'] == $method) {
        // redirect to the controller
      }
    }
  }

  public function abort($code = 404)
  {
    http_response_code($code);
    die();
  }
}
