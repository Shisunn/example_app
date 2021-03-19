<?php

use App\Http\Controllers\sliderController;
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

Route::view('/contact', 'contact');

Route::get('/administrators', fn() => view('admin.index'));

Route::get('/administrators/slider', 'sliderController@index')->name('slider');

Route::post('/administrators/slider', 'sliderController@store');

Route::get('/administrators/slider/{id}/delete', [sliderController::class, 'destroy'])->name('slider.delete');

Route::get('/administrators/slider/{id}/active', [sliderController::class, 'active'])->name('slider.active');

Route::get('/administrators/slider/{id}/moveUp', [sliderController::class, 'moveUp'])->name('slider.moveUp');

Route::get('/administrators/slider/{id}/moveDown', [sliderController::class, 'moveDown'])->name('slider.moveDown');

Route::get('/admin/slider/new', 'sliderController@form')->name('new_slider');
