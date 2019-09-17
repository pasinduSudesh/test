<?php

class App
{
    protected $controller;
    protected $method;

    public function __construct($router)
    {
        $url = $this->parseUrl();
        $router->route($url);
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = filter_var($_GET['url'], FILTER_SANITIZE_URL);
            return $url;
        }
    }
}
