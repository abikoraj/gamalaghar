<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.home');
});

Route::get('/wishlist', function () {
    return view('wishlist.wishlist');
});

Route::get('/customer/register', function () {
    return view('auth.register');
});

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/singleproduct', function () {
    return view('shop.single_product');
});

Route::get('/blog', function () {
    return view('blog.all_blog');
});

Route::get('/blog/details', function () {
    return view('blog.blog_details');
});
