<?php
define('BASE_PATH', dirname(__DIR__));
    // require basePath('helpers.php');
    // require basePath('views/home.view.php');
    
    require BASE_PATH . '/helpers.php';
    if (function_exists('loadView')) {
        loadView('home');
    }
    ?>