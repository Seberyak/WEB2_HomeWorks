<?php

require_once "router.php";
/*
route('/', function () {
    return "Hello World";
});
*/
route('/about', function () {
    return "Hello form the about route";
});

route('/spoilers', function () {
    return "Spoilers are bad, don't spoil anymore!";
});

$action = $_SERVER['REQUEST_URI'];
dispatch($action);
