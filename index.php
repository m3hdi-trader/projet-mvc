<?php

use App\Core\Routing\Route;
use App\Core\Routing\Router;
use App\Core\StupidRouter;
use App\Models\User;
use App\Utilities\Url;

include "Bootstrap/Init.php";

$usreData = [
    'name' => 'sara',
    'email' => 'sara@gmail.com',
    'password' => '123456',
];

$userModel = new User();
$result = $userModel->create($usreData);
// $user = $userModel->getAll();
var_dump($result);

// $roter = new Router();
// $roter->run();




// $route = '/post/{slug}';
// $patern = "/^" . str_replace(['/', '{', '}'], ['\/', '(?<', '>[-%\w]+)'], $route) . "$/";
// nice_dump($route);
// nice_dump($patern);
