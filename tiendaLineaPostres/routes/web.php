<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();
Route::get('/', 'HomeController@master');


Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/administrador', 'administradorController@ingresar');
Route::get('/registrarProductos', 'productosController@ingresar');
Route::post('/guardaProductos', 'productosController@guardar');

Route::get('/registrarCSV', 'productosController@ingresarCSV');
Route::post('/guardarProductoCSV', 'productosController@guardarProductoCSV');

Route::get('/registrarCategoria', 'categoriaController@ingresar');
Route::post('/guardaCategoria', 'categoriaController@guardar');
Route::get('/categoria/{id}','categoriaController@filtroCategoria');


Route::get('/consultaProductos', 'productosController@consultaProductos');

Route::get('/editarProductos/{id}', 'productosController@editar');

Route::post('/actualizarProductos/{id}', 'productosController@actualizar');
Route::get('/eliminaProductos/{id}', 'productosController@eliminar');

Route::get('/productoIndividual/{id}','productosController@productoIndividual');
Route::post('/guardaComentario','comentariosController@guardar');




