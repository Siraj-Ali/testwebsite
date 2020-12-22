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

Route::get('/', 'HomeController@products');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('locale/{locale}', function($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cart', 'Cart\CartController@cart')->name('cart');
Route::get('/cart/{product}', 'Cart\CartController@addToCart')->name('add.cart');
Route::get('/remove/{product}', 'Cart\CartController@removeFromCart')->name('remove');

Route::post('/create/product', 'Product\ProductController@createProduct')->name('create.product');
