<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Cart;
use App\Models\City;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Province;
use App\Models\UserDetail;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(Request $request)
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        $relatedProducts = Product::with('media')->with('productsizeprice')->take(4)->get();
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
        }

        $selectedProducts = $request->session()->get('selectedProducts');

        $productId = $selectedProducts->pluck('id')->toArray();
        $cartproductImages = Product::with('media')->whereIn('id', $productId)->get();

        $userDetails = UserDetail::join('users', 'users.id', '=', 'user_details.user_id')
            ->select('users.id', 'users.name', 'user_details.address')
            ->where('users.id', auth()->user()->id)
            ->first();

        $provinces=Province::all();

        return view('user.checkout', compact(
            'mainCategory',
            'countWishList',
            'countCarts',
            'cart',
            'cartproductImages',
            'selectedProducts',
            'cartproductImages',
            'relatedProducts',
            'userDetails',
            'provinces'
        ));
    }

    public function getCities($provinceId)
    {
        $cities = City::where('province_id', $provinceId)->get();
        return response()->json($cities);
    }

    public function getAreas($cityId){
        $areas = Area::where('city_id', $cityId)->get();
        return response()->json($areas);
    }
}