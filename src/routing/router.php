<?php

namespace App\Routing;

class Router
{
    private $routes;
    public function __construct()
    {
        $this->routes = require_once APP_ROOT . "/config/routes.php";
    }

    public function handleRequest(string $uri)
    {

        echo parse_url(
            $uri,
            PHP_URL_PATH
        );
    }
}
