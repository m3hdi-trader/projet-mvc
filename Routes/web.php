<?php

use App\Core\Routing\Route;

Route::add(['get', 'post'], '/', function () {
    echo "welcom";
});

Route::post('/saveForm', function () {
    echo "save ok";
});

Route::add(
    ['get'],
    '/null',
);

var_dump(Route::routes());
