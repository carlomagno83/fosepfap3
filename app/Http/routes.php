<?php

Route::get('/', function () {
    return view('welcome');
});


Route::auth();


Route::get('/home', 'HomeController@index');

//Mantenimientos
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

//Contrato
Route::resource("traslados","TrasladoController");

Route::resource("sepelios","SepelioController");

Route::resource("programacionsepelios","ProgramacionsepelioController");

Route::resource("gestions","GestionController");

Route::resource("medicos","MedicoController");

Route::resource("cabeceracontratos","CabeceracontratoController");

