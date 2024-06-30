<?php

namespace App\Core\Routing;

use App\Core\Request;
use Exception;

class Router
{
    private $request;
    private $routes;
    private $currentRoute;
    const BASE_CONTROLLER = 'App\Controllers\\';

    public function __construct()
    {
        $this->request = new Request();
        $this->routes = Route::routes();
        $this->currentRoute = $this->findeRoute($this->request) ?? null;
        #run middleware here
        $this->runRouteMiddleware();
    }

    private function runRouteMiddleware()
    {
        $middleware = $this->currentRoute['middleware'];
        foreach ($middleware as $middlewareClass) {
            $middlewareObj = new $middlewareClass;
            $middlewareObj->handle();
        }
    }

    public function findeRoute(Request $request)
    {

        foreach ($this->routes as $route) {
            if (!in_array($request->method(), $route['methoes'])) {
                return false;
            }

            if ($this->regexMatched($route)) {
                return $route;
            }
        }
        return null;
    }

    public function regexMatched($route)
    {
        global $request;

        $patern = "/^" . str_replace(['/', '{', '}'], ['\/', '(?<', '>[-%\w]+)'], $route['uri']) . "$/";
        $result = preg_match($patern, $this->request->uri(), $matches);
        if (!$result) {
            return false;
        }

        foreach ($matches as $key => $value) {
            if (!is_int($key)) {
                $request->addRouteParam($key, $value);
            }
        }

        return true;
    }

    private function isInvalidRequest(Request $request): bool
    {
        foreach ($this->routes as $route) {
            if (!in_array($request->method(), $route["methoes"])  and $request->uri() == $route['uri']) {
                return true;
            }
        }
        return false;
    }


    private function dispatch405(): void
    {
        header("HTTP/1.0 405 Method Not Allowed");
        views('errors.405');
        die();
    }

    private function dispatch404(): void
    {
        header("HTTP/1.0 404 Not Found");
        views('errors.404');
        die();
    }

    public function run()
    {
        # 405:invalid_request _method
        if ($this->isInvalidRequest($this->request)) {
            $this->dispatch405();
        }

        #404:uri not exist

        if (is_null($this->currentRoute)) {
            $this->dispatch404();
        }

        $this->dispatch($this->currentRoute);
    }

    public function dispatch($rote)
    {
        #action : null

        $action = $rote['action'];
        if (is_null($action) || empty($action)) {
            return;
        }
        # action : clousure

        if (is_callable($action)) {
            $action();
            // call_user_func($action);
        }

        #action : Controller@Method

        if (is_string($action)) {
            $action = explode('@', $action);
        }

        #action: ['Controller', 'Method']

        if (is_array($action)) {
            $className = self::BASE_CONTROLLER . $action[0];
            $method = $action[1];
            if (!class_exists($className)) {
                throw new \Exception("class $className not exists!");
            }
            $controller = new $className;
            if (!method_exists($controller, $method)) {
                throw new \Exception("method $method not exists in class $className!");
            }
            $controller->{$method}();
        }
    }
}
