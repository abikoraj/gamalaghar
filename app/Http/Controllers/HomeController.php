<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Faq;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\ProductSizePrice;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $mainCategory = MainCategory::with('subcategories')->get();
        $product = Product::with(['media', 'productsizeprice','productImages'])->latest()->get();
        // dd($product);
        // $productSizePrice=ProductSizePrice::where('')
        
        if (auth()->check()) {
            $countWishList = Wishlist::where('user_id', auth()->user()->id)->count();
            $countCarts = Cart::where('user_id', auth()->user()->id)->count();
            $cart = Cart::join('products', 'products.id', '=', 'carts.product_id')
                ->join('product_size_prices', 'product_size_prices.id', '=', 'carts.product_size_price_id')
                ->join('sizes', 'sizes.id', '=', 'product_size_prices.size_id')
                ->select('products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity', 'carts.id as cartid', 'carts.user_id')
                ->groupBy('cartid', 'products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity', 'carts.user_id')
                ->where('carts.user_id', auth()->user()->id)->get();
            $productId = $cart->pluck('id')->toArray();
            $cartproductImages = Product::with('media')->whereIn('id', $productId)->get();
        } else {
            $countWishList = "";
            $countCarts = "";
            $cart = [];
            $cartproductImages = [];
            $mainCategory = MainCategory::with('subcategories')->get();
        }

        $faqs = Faq::all();
        return view('home.home', compact('mainCategory', 'product', 'countWishList', 'cart', 'cartproductImages', 'countCarts', 'faqs'));
    }
}