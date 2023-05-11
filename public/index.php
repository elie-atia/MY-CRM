<?php

$request = str_replace('/public/index.php', '', $_SERVER['REQUEST_URI']);

switch ($request) {
    
    case '/' :
        require __DIR__ . '/../app/views/home.php';
        break;
    case '/login' :
        require __DIR__ . '/../app/views/login.php';
        break;
    case '/signup' :
        require __DIR__ . '/../app/views/signup.php';
        break;
    case '/logout' :
        require __DIR__ . '/../app/views/logout.php';
        break;
    // etc.
    default:
        echo $request;
        // http_response_code(404);
        break;
}