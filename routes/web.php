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

Route::get('/', 'indexController@index');

Route::get('/about', fn() => view('about'));

Route::get('/shop', fn() => view('shop'));

Route::get('show', 'showController@show');

Route::get('/contact', fn() => view('contact'));

// Route::get('/{id}', fn($id) =>
//     view('lylay')
// );
