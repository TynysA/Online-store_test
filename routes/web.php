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
Route::get('/cart', 'MainContr@cart')->name('cart');
Route::get('/categories', 'MainContr@categories')->name('categories');
Route::get('/heart', 'MainContr@heart')->name('heart');
Route::get('/{category}', 'MainContr@category')->name('category');
Route::get('/{category}/{itemName?}', 'MainContr@item')->name('product');
//category

