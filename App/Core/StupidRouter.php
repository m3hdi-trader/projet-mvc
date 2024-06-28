<?php

namespace App\Core;

use App\Utilities\Url;

class StupidRouter
{
    private $route;

    public function __construct()
    {
        $this->route = [
            '/colors/red' => '/colors/red.php',
            '/colors/blue' => '/colors/blue.php',
            '/colors/green' => '/colors/green.php'
        ];
    }

    public function run()
    {
        $currentRoute = Url::currentRoute();

        foreach ($this->route as $route => $view) {
            if ($currentRoute === $route) {
                include $this->inculdeAndDie(BASEPATH . "Views/$view");
            }
        }
        #404 header

        header("HTTP/1.0 404 Not Found");

        include $this->inculdeAndDie(BASEPATH . "Views/errors/404.php");
    }

    private function inculdeAndDie($viewpath)
    {
        include $viewpath;
        die();
    }
}
