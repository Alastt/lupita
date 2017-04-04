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

Route::get('/login', function () {
    return view('auth.login');
});

Route::group(['middleware' => 'auth'], function(){

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

    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
    'uses' => 'UsersController@destroy',
    'as' => 'users.destroy'
    ]);

});

Route::get('auth/login', [
    'uses' => 'AuthController@getLogin',
    'as' => 'auth.login'
]);
Route::post('auth/login', [
    'uses' => 'AuthController@postLogin',
    'as' => 'auth.login'
]);
Route::get('auth/logout', [
    'uses' => 'AuthController@logout',
    'as' => 'auth.logout'
]);
