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
Route::get('/', 'MainContr@index')->name('index');
Route::get('/categories', 'MainContr@categories')->name('categories');
Route::get('/heart', 'MainContr@heart')->name('heart');
Route::get('/cart', 'MainContr@cart')->name('cart');
Route::get('/{category}', 'MainContr@category')->name('category');
Route::get('/{category}/{itemName?}', 'MainContr@item')->name('product');
//cart

Route::get('/order', 'BasketController@cartPlace')->name('order');
Route::post('/cart/add/{id}', 'BasketController@cartAdd')->name('cartAdd');
