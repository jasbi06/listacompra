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


Route::group(['middleware'=>'auth'], function (){

    Route::get('/', 'HomeController@index');


Route::group(['prefix' => 'productos'], function() {

    Route::get('/show/{id}', 'ProductoController@getShow');

    Route::get('/create', 'ProductoController@getCreate');

    Route::get('/categorias', 'ProductoController@getCategorias');

    Route::post('/create', 'ProductoController@postCreate');

    Route::put('/changeRented/{id}', 'ProductoController@changeRented');

    Route::get('/edit/{id}', 'ProductoController@getEdit');

    Route::put('/edit/{id}', 'ProductoController@putEdit');

    Route::get('/{cat?}', 'ProductoController@getIndex');
});
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
