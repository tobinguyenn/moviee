<?php

namespace Core\Routing;

use Core\Constants\HttpStatusCode;

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

    private static function error404()
    {
        http_response_code(HttpStatusCode::NOT_FOUND);
        echo json_encode(['code' => HttpStatusCode::NOT_FOUND]);
    }

    public static function dispatch()
    {
        $path = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset(self::$routes[$method][self::normalizedPath($path)])) {
            $action = self::$routes[$method][self::normalizedPath($path)];
            if ($action instanceof \Closure) {
                $action();
            } elseif (is_array($action)) {
                /** @var \Core\Controller */
                $instance = new $action[0];
                if (isset($action[1])) {
                    $instance->execute($action[1]);
                } elseif (is_callable($instance)) {
                    $instance();
                }
            }

            return;
        }

        self::error404();
    }

    public static function get(string $path, mixed $action)
    {
        self::$routes[self::METHOD_GET][self::normalizedPath($path)] = $action;
    }
}
