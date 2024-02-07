<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\MainCategory;
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


Route::get('register', [UserController::class, 'index']);
Route::post('register', [UserController::class, 'store']);


Route::get('login', [LoginController::class, 'index']);
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('/', [HomeController::class, 'index']);

Route::get('product/{slug}', [ProductController::class, 'showProduct']);

Route::get('/wishlist', function () {
    return view('wishlist.wishlist');
});


Route::get('/product-show', function () {
    $mainCategory = MainCategory::with('subcategories')->get();
    return view('shop.product', compact('mainCategory'));
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

Route::get('/profile', function () {
    return view('user.profile');
});

Route::get('/contact_us', function () {
    return view('contact_us');
});

Route::get('/cart', function () {
    return view('user.user_cart');
});

Route::get('/hot-offer', function () {
    return view('hot_offer');
});
