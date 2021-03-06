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

/* Route::get('/', function () {
    return view('home.index');
}) -> name('homepage');
 */


Route::get('/', 'HomecatalogController@showCatalog') -> name('homepage');

Route::get('/product/{idProduct}', 'HomecatalogController@showProduct') -> name('product-detail');

Route::post('/add', 'HomecatalogController@addProduct') -> name('add_product');
