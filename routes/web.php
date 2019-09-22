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

Route::get('/', 'PageController@home');
Route::get('/home', 'PageController@home');
Route::get('/shop', 'PageController@shop');
Route::get('/product-detail', 'PageController@detail');
Route::get('/cart', 'PageController@cart');
Route::get('/checkout', 'PageController@checkout');
