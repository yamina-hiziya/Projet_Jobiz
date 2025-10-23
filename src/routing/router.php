<?php

namespace App\Routing;

class Router
{
    private $routes;
    public function __construct()
    {
        // Constructor pour configurer le routeur
        $this->routes = require_once APP_ROOT . "/config/routes.php";
    }

    public function handleRequest(string $uri)
    {
        $path = $this->normalizePath($uri);
        $route = $this->routes[$path];

        $controllerPath = $route["controller"];
        $action = $route["action"];

        $controllerPath = new $controllerPath();

        $controllerPath->$action();
    }

    public static function normalizePath(string $uri): string
    {
        $path = parse_url($uri, PHP_URL_PATH);
        return rtrim($path, '/') . '/';
        return $path;
    }
}
