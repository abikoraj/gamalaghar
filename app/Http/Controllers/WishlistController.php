<?php

namespace App\Http\Controllers;

use App\Http\Requests\Wishlist\WishlistCreateRequest;
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
            ->select('products.id', 'products.product_name', 'products.description', 'products.slug',  \DB::raw('MIN(product_size_prices.price) as price'))
            ->groupBy('products.id', 'products.product_name', 'products.description', 'products.slug')
            ->where('wishlists.user_id', auth()->user()->id)
            ->get();

            if ($wishLists->isNotEmpty()) {
                $productID = $wishLists->pluck('id')->toArray();

                $productImages = Product::with('media')->whereIn('id', $productID)->get();
            } else {
                // Handle the case where the wishlist is empty for the authenticated user
                $productImages = [];
            }
            $countWishList = Wishlist::where('user_id', auth()->user()->id)->count();
        } else {
            // Handle the case where the user is not authenticated
            $productImages = [];
            $wishLists=[];
             $countWishList="";
        }

       


        return view('wishlist.wishlist', compact('mainCategory', 'wishLists', 'productImages', 'countWishList'));
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
                        return response()->json([], 200);
                    }
                } else {
                    return response()->json([], 400);
                }
            } else {
                return response()->json([], 401);
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}