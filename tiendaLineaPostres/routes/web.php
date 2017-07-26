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

Route::get('/', function () {
    return view('master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');

Route::get('/administrador', 'administradorController@ingresar');
Route::get('/registrarProductos', 'productosController@ingresar');
Route::post('/guardaProductos', 'productosController@guardar');

Route::get('/registrarCSV', 'productosController@ingresarCSV');
Route::post('/guardarProductoCSV', 'productosController@guardarProductoCSV');

Route::get('/registrarCategoria', 'categoriaController@ingresar');
Route::post('/guardaCategoria', 'categoriaController@guardar');


