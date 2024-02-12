<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
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

Route::get('products/{slug}', [ProductController::class, 'showProduct']);
Route::get('product/{slug}', [ProductController::class, 'showSingleProduct']);

Route::get('/get-price', [ProductController::class, 'getPrice'])->name('get.price');

Route::get('profile', [AccountController::class, 'index']);
Route::post('profile', [AccountController::class, 'edituserdetails']);

Route::get('wishlist', [WishlistController::class, 'index']);
Route::post('wishlist', [WishlistController::class, 'store'])->name('wishlist');

Route::get('/blog', function () {
    return view('blog.all_blog');
});

Route::get('/blog/details', function () {
    return view('blog.blog_details');
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

Route::get('/history', function () {
    $mainCategory = MainCategory::with('subcategories')->get();
    return view('user.history', compact('mainCategory'));
});

Route::get('about-us',[AboutUsController::class,'index']);
