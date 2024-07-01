<?php

use App\Core\Routing\Route;
use App\Core\Routing\Router;
use App\Core\StupidRouter;
use App\Models\Prodouct;
use App\Models\User;
use App\Utilities\Url;

include "Bootstrap/Init.php";

// $usreData = [
//     'name' => 'sara',
//     'email' => 'sara@gmail.com',
//     'password' => '123456',
// ];

// $userModel = new User();
// $result = $userModel->create($usreData);
// var_dump($result);

// $userModel = new User();
// $result = $userModel->sum('id', ['id[<] ' => '3']);
// var_dump($result);

// $productModel = new Prodouct();


// for ($i = 5; $i < 20; $i++) {
//     $userModel->create([
//         'name' => "User$i",
//         'email' => "mohammad@gmail.com",
//         'password' => "123456"
//     ]);
// }




$roter = new Router();
$roter->run();
