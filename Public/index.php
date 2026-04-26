<?php
// define('BASE_PATH', dirname(__DIR__));
    // require basePath('helpers.php');
    
    require '../helpers.php';
    // require basePath('views/home.view.php');
    // loadView('home');
    require basePath('Router.php');

    $router = new Router();

    $routes = require basePath('routes.php');

    $uri = $_SERVER['REQUEST_URI']; //uniform resource identifier

    $method = $_SERVER['REQUEST_METHOD'];

    $router->route($uri, $method);
    
    
    
   

    