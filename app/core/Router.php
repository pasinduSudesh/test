<?php

class Router
{
    protected $routes = [];

    public function __construct() {
        $this->routes = [];
    }

    public function addRoute($pattern, $controller, $function) {
        array_push($this->routes, [$pattern, $controller, $function]);
    }

    public function route($url) {
        $controller = 'ErrorPage';
        $function = 'pageNotFound';
        foreach($this->routes as $route) {
            if ($url == $route[0]) {
                $controller = $route[1];
                $function = $route[2];
                break;
            }
        }

        require_once __DIR__ . '/../controllers/' . $controller . '.php';
        $controller = new $controller();
        call_user_func(array($controller, $function));
    }

}
