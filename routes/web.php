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

Route::get('/', function(){
    $sliders = [
        ['image' => 'banner_img_01.jpg', 'title' => 'Zay eCommerce', 'sub_title' => 'Tiny and Perfect eCommerce Template', 'text' => 'Zay Shop is an eCommerce HTML5 CSS template with latest version of Bootstrap 5 (beta 1). 
        This template is 100% free provided by <a rel="sponsored" class="text-success" href="https://templatemo.com" target="_blank">TemplateMo</a> website. 
        Image credits go to <a rel="sponsored" class="text-success" href="https://stories.freepik.com/" target="_blank">Freepik Stories</a>,
        <a rel="sponsored" class="text-success" href="https://unsplash.com/" target="_blank">Unsplash</a> and
        <a rel="sponsored" class="text-success" href="https://icons8.com/" target="_blank">Icons 8</a>.'],
        ['image' => 'banner_img_02.jpg', 'title' => 'Proident occaecat', 'sub_title' => 'Proident occaecat', 'text' => ' You are permitted to use this Zay CSS template for your commercial websites. You are not permitted to re-distribute the template ZIP file in any kind of template collection websites. '],
        ['image' => 'banner_img_03.jpg', 'title' => 'Repr in voluptate', 'sub_title' => 'Ullamco laboris nisi ut ', 'text' => ' We bring you 100% free CSS templates for your websites. If you wish to support TemplateMo, please make a small contribution via PayPal or tell your friends about our website. Thank you.']
    ];
    
    $cat_months = [
        ['image' => 'category_img_01.jpg', 'title' => 'Watches', 'button' => 'Go Shop'],
        ['image' => 'category_img_02.jpg', 'title' => 'Shoes', 'button' => 'Go Shop'],
        ['image' => 'category_img_03.jpg', 'title' => 'Accessories', 'button' => 'Go Shop'],
    ];

    $features = [
        ['image' => 'feature_prod_01.jpg', 'price' => '240.00', 'title' => 'Gym Weight', 'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.'],
        ['image' => 'feature_prod_02.jpg', 'price' => '480.00', 'title' => 'Cloud Nike Shoes', 'text' => 'Aenean gravida dignissim finibus. Nullam ipsum diam, posuere vitae pharetra sed, commodo ullamcorper.'],
        ['image' => 'feature_prod_03.jpg', 'price' => '360.00', 'title' => 'Summer Addides Shoes', 'text' => 'Curabitur ac mi sit amet diam luctus porta. Phasellus pulvinar sagittis diam, et scelerisque ipsum lobortis nec.'],
    ];

    

    return view('index', compact('sliders', 'cat_months', 'features', 'related'));
});

// Route::get('/', fn() => view('index'));

Route::get('/about', fn()=> view('about'));

Route::get('/shop', fn()=> view('shop'));

Route::get('/show', function(){
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

Route::get('/contact', fn()=> view('contact'));

// Route::get('/{id}', fn($id) =>
//     view('lylay')
// );
