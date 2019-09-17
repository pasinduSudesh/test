<?php declare (strict_types = 1);

require_once __DIR__ . '/core/App.php';
require_once __DIR__ . '/core/Controller.php';
require_once __DIR__ . '/core/Router.php';

$router = new Router();

//adding route
// $router->addRoute(pattern(URL), Controller, function);

// home
$router->addRoute("", "Home", "index");

//login
$router->addRoute("login", "Login", "loginUser");

//register
$router->addRoute("register", "Register", "registerUser");

$router->addRoute("gallery", "Gallery", "show");

$router->addRoute("addToCart", "Cart", "addItem");




$app = new App($router);