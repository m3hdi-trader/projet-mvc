<?php

define('BASEPATH', __DIR__ . "/../");

include  BASEPATH . "/vendor/autoload.php";
include  BASEPATH . "/Helpers/Helpers.php";

$dotenv = Dotenv\Dotenv::createImmutable(BASEPATH);
$dotenv->load();
$request = new \App\Core\Request();

include  BASEPATH . "/Routes/web.php";
