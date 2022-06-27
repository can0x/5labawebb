<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\ProductController@show');
Route::get('/about', 'App\Http\Controllers\ProductController@about');
Route::get('/catalog', 'App\Http\Controllers\ProductController@catalog');
Route::get('/basket', 'App\Http\Controllers\ProductController@basket');

Route::post('/add_product', 'App\Http\Controllers\ProductController@add');
Route::post('/delete_product', 'App\Http\Controllers\ProductController@delete');
