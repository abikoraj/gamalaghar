<?php

namespace App\Http\Controllers;

use App\Http\Requests\Wishlist\WishlistCreateRequest;
use App\Models\Cart;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Client\ResponseSequence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function index()
    {
        $mainCategory = MainCategory::with('subcategories')->get();

        if (auth()->check()) {
            $wishLists = Wishlist::join('products', 'products.id', '=', 'wishlists.product_id')
                ->join('product_size_prices', 'products.id', '=', 'product_size_prices.product_id')
                ->select('products.id', 'products.product_name', 'products.description', 'products.slug',  \DB::raw('MAX(product_size_prices.price) as price'))
                ->groupBy('products.id', 'products.product_name', 'products.description', 'products.slug')
                ->where('wishlists.user_id', auth()->user()->id)
                ->get();

            if ($wishLists->isNotEmpty()) {
                $productID = $wishLists->pluck('id')->toArray();

                $productImages = Product::with('media')->whereIn('id', $productID)->get();
            } else {

                $productImages = [];
            }
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
            // Handle the case where the user is not authenticated
            $productImages = [];
            $wishLists = [];
            $countWishList = "";
            $countCarts = "";
            $cart = [];
            $cartproductImages = [];
        }



        return view('wishlist.wishlist', compact('mainCategory', 'wishLists', 'productImages', 'countWishList', 'cart', 'cartproductImages', 'countCarts'));
    }

    public function store(WishlistCreateRequest $request)
    {
        try {
            // Check if the user is logged in
            if (Auth::check()) {
                // Check if the product is already in the user's wishlist
                $existingWishlistItem = Wishlist::where('user_id', auth()->user()->id)
                    ->where('product_id', $request->product_id)
                    ->first();

                // If the product is not already in the wishlist, add it
                if (!$existingWishlistItem) {
                    $wishlist = DB::transaction(function () use ($request) {
                        $wishlist = Wishlist::create([
                            'user_id' => auth()->user()->id,
                            'product_id' => $request->product_id,
                        ]);
                        return $wishlist;
                    });

                    if ($wishlist) {
                        return back()->with('success', 'Added to Wishlist');
                    } else {
                        return back();
                    }
                } else {
                    return back();
                }
            } else {
                return redirect('login')->with('error', 'Please Login First');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id) {
        $wishlist = Wishlist::find($id);
        if (is_null($wishlist)) {
            return back()->with('error', 'Product Not Found!');
        }
        try {
            $wishlist = DB::transaction(function () use ($wishlist) {
                $wishlist->delete();
                return $wishlist;
            });
            if ($wishlist) {
                return back()->with('success', 'Product Earsed From Wishlist');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
