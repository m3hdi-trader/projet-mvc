<?php

define('BASEPATH', __DIR__ . "/../");

include  BASEPATH . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();
$request = new \App\Core\Request();

include  BASEPATH . "/Helpers/Helpers.php";
include  BASEPATH . "/Routes/web.php";
