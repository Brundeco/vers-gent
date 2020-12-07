<?php

use Illuminate\Support\Facades\Route;

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

// Home routes
Route::get('/', 'HomeController@index');


// Products info routes
Route::get('/products', 'ProductsController@index');
Route::get('/products/{id}/show', 'ProductsController@show');

Route::get('/products/create','ProductsController@create');
Route::post('/products', 'ProductsController@store');

Route::get('/products/{id}/edit','ProductsController@edit');
Route::put('/products', 'ProductsController@update');

Route::get('/contact','ContactController@index');
Route::post('/contact', 'ContactController@post')->name('contact.post');
// Route::get('/contact/confirm', 'PageController@submit')->name('contact.confirm');

Route::get('/webshop','WebshopController@index');
