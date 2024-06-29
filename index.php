<?php

use App\Core\Routing\Route;
use App\Core\Routing\Router;
use App\Core\StupidRouter;

use App\Utilities\Url;

include "Bootstrap/Init.php";

$roter = new Router();
$roter->run();
