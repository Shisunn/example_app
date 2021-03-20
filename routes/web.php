<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\showController;
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

Route::get('/', [indexController::class, 'index']);

Route::get('/about', fn() => view('about'));

Route::get('/shop', fn() => view('shop'));

Route::get('show', [showController::class, 'show']);

Route::view('/contact', 'contact');

Route::get('/administrators', fn() => view('admin.index'));

Route::resource('/administrators/sliders', sliderController::class)->parameters([
    'sliders' => 'id',
]);

Route::get('/administrators/slider/{id}/active', [sliderController::class, 'active'])->name('sliders.active');

Route::get('/administrators/slider/{id}/moveUp', [sliderController::class, 'moveUp'])->name('sliders.moveUp');

Route::get('/administrators/slider/{id}/moveDown', [sliderController::class, 'moveDown'])->name('sliders.moveDown');

// Route::get('/administrators/slider/new', [sliderController::class, 'form'])->name('new_slider');
