<?php

require_once __DIR__ . '/../vendor/autoload.php'; // Charge AltoRouter
$router = new AltoRouter();
$router->setBasePath('/public');

// $request_temp = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $request = str_replace('/public/index.php', '', $request_temp);



$router->map('GET', '/', function() {
    require __DIR__ . '/../app/views/home.php';
},'login');

$router->map('GET', '/login', function() {
    require __DIR__ . '/../app/views/login.php';
});

$router->map('GET', '/signup', function() {
    require __DIR__ . '/../app/views/signup.php';
});

$router->map('GET', '/logout', function() {
    require __DIR__ . '/../app/views/logout.php';
});

$router->map('GET', '/send-mail', function() {
    require __DIR__ . '/../app/views/send-mail.php';
});

$router->map('GET', '/see-interaction', function() {
    require __DIR__ . '/../app/views/see-interaction.php';
});

$router->map('GET', '/learn-php', function() {
    require __DIR__ . '/../app/views/learn-php.php';
});



$match = $router->match();

if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']); 
} else {
    // No route was matched
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}

$loginUrl = $router->generate('login');
