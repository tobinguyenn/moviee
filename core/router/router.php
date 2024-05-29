<?php

namespace Core\Router;

class Router
{
  const METHOD_GET = 'GET';

  public static $routes = [];

  private static function normalizedPath(string $path)
  {
    $path = strtok($path, '?');
    $path = ltrim($path, '/');

    return $path;
  }

  public static function dispatch()
  {
    $path = $_SERVER['REQUEST_URI'];
    $method = $_SERVER['REQUEST_METHOD'];

    if (isset(self::$routes[$method][self::normalizedPath($path)])) {
      return self::$routes[$method][self::normalizedPath($path)]();
    }

    header('Location: 404');
  }

  public static function get(string $path, callable $action)
  {
    self::$routes[self::METHOD_GET][self::normalizedPath($path)] = $action;
  }
}

Router::get('404', fn () => require_once __DIR__ . '/../../views/errors/404.php');
