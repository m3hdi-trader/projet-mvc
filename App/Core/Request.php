<?php

namespace App\Core;

class Request
{
    private $params;
    private $routeParams;
    private $agent;
    private $method;
    private $ip;
    private $uri;

    public function __construct()
    {

        foreach ($_REQUEST as $key => $value) {
            $_REQUEST[$key] = xssClean($value);
        }

        $this->params = $_REQUEST;
        $this->agent = $_SERVER['HTTP_USER_AGENT'];
        $this->method =  strtolower($_SERVER['REQUEST_METHOD']);
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->uri = strtok($_SERVER['REQUEST_URI'], '?');
    }

    public function addRouteParam($key, $value)
    {
        $this->routeParams[$key] = $value;
    }
    public function getRouteParam($key)
    {
        return $this->routeParams[$key];
    }

    public function getRouteParams($key)
    {
        return $this->routeParams;
    }

    public function params()
    {
        return $this->params;
    }

    public function agent()
    {
        return $this->agent;
    }

    public function method()
    {
        return $this->method;
    }

    public function ip()
    {
        return $this->ip;
    }

    public function uri()
    {
        return $this->uri;
    }

    public function input($key)
    {
        return $this->params[$key] ?? null;
    }

    public function isset($key)
    {
        return isset($this->params[$key]);
    }

    public function redirect($route)
    {
        header("Location:" . site_url($route));
        die();
    }
}
