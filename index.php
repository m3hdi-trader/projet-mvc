<?php

use App\Core\StupidRouter;

use App\Utilities\Url;

include "Bootstrap/Init.php";



$router = new StupidRouter();
$router->run();

// $request = new \App\Core\Request();
// var_dump($request->isset('age'));
