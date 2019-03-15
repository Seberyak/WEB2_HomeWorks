<?php
require 'Router.php';

$path = parse_url( trim( $_SERVER['REQUEST_URI'], '/' ), PHP_URL_PATH);

$router = new Router;
$router->add('', 'views/default.php');
$router->add('Hello', 'views/Hello.php');
$router->add('By', 'views/By.php');
require $router->run($path);


?>
