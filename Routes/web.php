<?php

use App\Core\Routing\Route;

Route::get('/', 'HomeController@index');
Route::get('/archive/', 'ArchiveController@index');
Route::get('/archive/articales', 'ArchiveController@articales');
Route::get('/archive/products', 'ArchiveController@products');

Route::add(['get', 'post'], '/a', function () {
    echo "welcom";
});

Route::get('/b', function () {
    echo "save ok";
});

Route::put('/c', ['Controller', 'Method']);
Route::get('/d', 'Controller@Method');
