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

Route::redirect('/', '/product/list');

Route::group(['prefix' => 'product'], function (){

    Route::get('/list', 'App\Http\Controllers\ProductController@list')
        ->name('list_products');

    Route::post('/create', 'App\Http\Controllers\ProductController@create')
        ->name('create_product');

    Route::get('/detail/{id}', 'App\Http\Controllers\ProductController@detail')
        ->name('detail_product');

    Route::get('/new', 'App\Http\Controllers\ProductController@new')
        ->name('new_product');
});

Route::group(['prefix' => 'order'], function (){

    Route::get('/list', 'App\Http\Controllers\OrderController@list')
        ->name('list_orders');
    
    Route::post('/create', 'App\Http\Controllers\OrderController@create')
        ->name('create_order');

    Route::get('/detail/{id}', 'App\Http\Controllers\OrderController@detail')
        ->name('detail_order');

    Route::get('/new', 'App\Http\Controllers\OrderController@new')
        ->name('new_order');
});

