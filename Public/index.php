<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../helpers.php';

use Framework\Router;

$config = require basePath('config/db.php');


$router = new Router();
$routes = require basePath('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


$router->route($uri);
