<?php

$request_temp = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request = str_replace('/public/index.php', '', $request_temp);

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
    case '/send-mail' :
        require __DIR__ . '/../app/views/send-mail.php';
        break;
    case '/see-interaction' :
        require __DIR__ . '/../app/views/see-interaction.php';
        break;
    // etc.
    default:
        echo $request;
        // http_response_code(404);
        break;
}