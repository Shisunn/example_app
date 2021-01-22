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

Route::get('/show', function () {
    $related = [
        ['image' => 'shop_08.jpg', 'title' => 'Red Clothing', 'size' => 'M/L/X/XL', 'price' => '20.00', 'star' => 4, 'nostar' => 1],
        ['image' => 'shop_09.jpg', 'title' => 'White Shirt', 'size' => 'M/L/X/XL', 'price' => '25.00', 'star' => 3, 'nostar' => 2],
        ['image' => 'shop_10.jpg', 'title' => 'Oupidatat non', 'size' => 'M/L/X/XL', 'price' => '45.00', 'star' => 5, 'nostar' => 0],
        ['image' => 'shop_11.jpg', 'title' => 'Black Fashion', 'size' => 'M/L/X/XL', 'price' => '60.00', 'star' => 3, 'nostar' => 2],
        ['image' => 'shop_08.jpg', 'title' => 'Oupidatat non', 'size' => 'M/L/X/XL', 'price' => '80.00', 'star' => 3, 'nostar' => 2],
        ['image' => 'shop_09.jpg', 'title' => 'Oupidatat non', 'size' => 'M/L/X/XL', 'price' => '110.00', 'star' => 3, 'nostar' => 2],
        ['image' => 'shop_10.jpg', 'title' => 'Oupidatat non', 'size' => 'M/L/X/XL', 'price' => '125.00', 'star' => 3, 'nostar' => 2],
        ['image' => 'shop_11.jpg', 'title' => 'Oupidatat non', 'size' => 'M/L/X/XL', 'price' => '160.00', 'star' => 3, 'nostar' => 2],
        ['image' => 'shop_10.jpg', 'title' => 'Oupidatat non', 'size' => 'M/L/X/XL', 'price' => '180.00', 'star' => 3, 'nostar' => 2],
        ['image' => 'shop_09.jpg', 'title' => 'Oupidatat non', 'size' => 'M/L/X/XL', 'price' => '220.00', 'star' => 3, 'nostar' => 2],
        ['image' => 'shop_11.jpg', 'title' => 'Oupidatat non', 'size' => 'M/L/X/XL', 'price' => '250.00', 'star' => 3, 'nostar' => 2],
        ['image' => 'shop_08.jpg', 'title' => 'Red Clothing', 'size' => 'M/L/X/XL', 'price' => '300.00', 'star' => 4, 'nostar' => 1],
    ];

    return view('show', compact('related'));
});

Route::get('/contact', fn() => view('contact'));

// Route::get('/{id}', fn($id) =>
//     view('lylay')
// );
