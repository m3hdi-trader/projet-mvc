<?php

use App\Core\Routing\Route;


Route::get('/', 'HomeController@index');
Route::post('/contact/add', 'ContactController@add');
Route::get('/contact/delete/{id}', 'ContactController@delete');
// Route::get('/post/{slug}', 'PostController@single');
// Route::get('/post/{slug}/comment/{cid}', 'PostController@comment');
// Route::get('/todo/list', 'TodoController@list', [BlockFirefox::class, BlockIE::class]);
// Route::get('/todo/add', 'TodoController@add');
// Route::get('/todo/remove', 'TodoController@remove');
// Route::get('/archive/', 'ArchiveController@index');
// Route::get('/archive/articales', 'ArchiveController@articales');
// Route::get('/archive/products', 'ArchiveController@products');
