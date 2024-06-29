<?php

use App\Core\Routing\Route;

Route::get('/', 'HomeController@index');

Route::add(['get', 'post'], '/a', function () {
    echo "welcom";
});

Route::get('/b', function () {
    echo "save ok";
});

Route::put('/c', ['Controller', 'Method']);
Route::get('/d', 'Controller@Method');
