<?php

Route::get('/', function () {
    return view('welcome');
});



Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource("categorias","CategoriumController");

Route::resource("urnas","UrnaController");

Route::resource("proveedors","ProveedorController");

Route::resource("capillas","CapillaController");

Route::resource("candelabros","CandelabroController");

Route::resource("colors","ColorController");

Route::resource("ataudmodelos","AtaudmodeloController");

Route::resource("atauds","AtaudController");

Route::resource("ataudtamanos","AtaudtamanoController");

Route::resource("vehiculomarcas","VehiculomarcaController");

Route::resource("vehiculomodelos","VehiculomodeloController");

Route::resource("vehiculos","VehiculoController");

Route::resource("servicios","ServicioController");


