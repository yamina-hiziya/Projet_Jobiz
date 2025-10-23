<?php


//charger l'autoloader
require_once __DIR__ . "/../vendor/autoload.php";

// on définit une constatnte pour avoir le chemin racine de l'app
define("APP_ROOT", dirname(__DIR__));

use App\Routing\Router;

$router = new Router();
$router->handleRequest($_SERVER["REQUEST_URI"]);



/*
use App\Controller\PageController;

$pageController = new PageController();
$pageController->home();
*/