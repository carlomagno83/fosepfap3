<?php

Route::get('/', function () {
    return view('welcome');
});



Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource("categorias","CategoriumController");

Route::resource("proveedors","ProveedorController");