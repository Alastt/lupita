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
    return view('welcome');
});

Route::resource('categorias', 'CategoriasController');
Route::get('categorias/{id}/destroy', [
    'uses' => 'CategoriasController@destroy',
    'as' => 'categorias.destroy'
]);

Route::resource('lugares', 'LugaresController');
Route::get('lugares/{id}/destroy', [
    'uses' => 'LugaresController@destroy',
    'as' => 'lugares.destroy'
]);

Route::resource('productos', 'ProductosController');
Route::get('productos/{id}/destroy', [
    'uses' => 'ProductosController@destroy',
    'as' => 'productos.destroy'
]);