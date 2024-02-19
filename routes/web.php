<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
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
Route::post('wishlist', [WishlistController::class, 'store']);

Route::get('cart', [CartController::class, 'index']);
Route::post('cart', [CartController::class, 'store']);
Route::get('cart/delete/{id}', [CartController::class, 'destroy']);

Route::get('user/checkout', [CheckoutController::class,'index'])->name('checkout');
Route::post('user/checkouts', [CartController::class, 'checkout']);


Route::get('/contact_us', function () {
    return view('contact_us');
});



Route::get('/history', function () {
    $mainCategory = MainCategory::with('subcategories')->get();
    return view('user.history', compact('mainCategory'));
});

Route::get('about-us', [AboutUsController::class, 'index']);
