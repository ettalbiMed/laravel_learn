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

Route::get('/', 'HomeController@home');
Route::get('product', 'productController@index');
Route::get('getProduct/{id}', 'productController@get');
Route::get('deleteProduct/{id}', 'productController@delete');
Route::get('setProduct', 'productController@add');
Route::get('updateProduct/{id}', 'productController@update');
Route::get('getMulti', 'productController@get_by_filter');
Route::middleware("auth")->group(function(){
   // Route::get('setProduct', 'productController@create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
