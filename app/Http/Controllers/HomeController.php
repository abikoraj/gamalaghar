<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        $product = Product::with('media')->latest()->get();
        if (auth()->check()) {
            $countWishList = Wishlist::where('user_id', auth()->user()->id)->count();
        } else {
            $countWishList = "";
        }
        $cart = Cart::join('products', 'products.id', '=', 'carts.product_id')
            ->join('product_size_prices', 'product_size_prices.id', '=', 'carts.product_size_price_id')
            ->join('sizes', 'sizes.id', '=', 'product_size_prices.size_id')
            ->select('products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity')
            ->groupBy('products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity')
            ->get();

        $productId = $cart->pluck('id')->toArray();
        $productImages = Product::with('media')->whereIn('id', $productId)->get();


        return view('home.home', compact('mainCategory', 'product', 'countWishList', 'cart', 'productImages'));
    }
}
