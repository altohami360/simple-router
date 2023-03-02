<?php

namespace Altohami\Router;

interface RouterInterface
{
  public static function get($url, $controller);

  public static function post($url, $controller);

  public static function put($url, $controller);

  public static function patch($url, $controller);

  public static function delete($url, $controller);
}
