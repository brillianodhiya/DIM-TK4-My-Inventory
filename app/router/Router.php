<?php

namespace router;

class Router
{
    private static $routes = [];

    /**
     * Mapping URL to our method, path, controller and function
     *
     * @param string $method
     * @param string $path
     * @param string $controller
     * @param string $function
     * @return void
     */
    public static function add(string $method, string $path, string $controller, string $function): void
    {
        self::$routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    /**
     * Execute routing into URL Mapping
     *
     * @return void
     */
    public static function run(): void
    {
        $path = '/';
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes as $route) {
            if ($path == $route['path'] && $method == $route['method']) {
                $controller = new $route['controller'];
                $function = $route['function'];
                $controller->$function();
                return;
            }
        }

        http_response_code(404);
        echo nl2br("ERROR 404\nWe cannot find what you are searching for. Please ensure that you are accessing the right URL!");
    }
}