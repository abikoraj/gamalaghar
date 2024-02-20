<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\ProductSizePrice;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function showProduct($slug)
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        $subCategory = SubCategory::where('slug', $slug)->first();
        $product = Product::with('media')->where('sub_category_id', $subCategory->id)->get();

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
        return view('shop.product', compact('mainCategory', 'subCategory', 'product', 'countWishList', 'cart', 'cartproductImages', 'countCarts'));
    }

    public function showSingleProduct($slug)
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        $product = Product::with('media')->with('productsizeprice')->where('slug', $slug)->first();
        $size = Size::all();


        $bestSellingProducts = Product::with('media')->with('productsizeprice')->take(6)->get();
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


            $existingWishlistItem = Wishlist::where('user_id', auth()->user()->id)
            ->where('product_id', $product->id)
            ->first();

            
        } else {
            $countWishList = "";
            $countCarts = "";
            $cart = [];
            $cartproductImages = [];
            $existingWishlistItem=[];
        }

       

        return view('shop.single_product', compact(
            'mainCategory',
            'product',
            'size',
            'relatedProducts',
            'bestSellingProducts',
            'countWishList',
            'cart',
            'cartproductImages',
            'countCarts',
            'existingWishlistItem'
        ));
    }

    public function getPrice(Request $request)
    {
        $sizeId = $request->size_id;
        $productSizePrice = ProductSizePrice::where('size_id', $sizeId)->first();
        if ($productSizePrice->product_stock == 0) {
            return response()->json([
                'productsizeid' => $productSizePrice->id,
                'price' => $productSizePrice->price,
                'stock' => 'OUT OF STOCK',
            ]);
        } else {
            return response()->json([
                'productsizeid' => $productSizePrice->id,
                'price' => $productSizePrice->price,
                'stock' => "IN STOCK",
            ]);
        }
    }
}