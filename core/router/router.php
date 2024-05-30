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

        header('Location: 404');
    }

    public static function get(string $path, mixed $action)
    {
        self::$routes[self::METHOD_GET][self::normalizedPath($path)] = $action;
    }
}

Router::get('404', function () {
    http_response_code(404);
    echo json_encode(['status' => 404]);
});
