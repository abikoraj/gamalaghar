<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    // public function index(){

    //     $cart = Cart::join('products', 'products.id', '=','carts.product_id')
    //     ->join('product_size_prices', 'producrs.id', '=', 'product_size_prices.product_id')
    //     ->select('products.id', 'products.product_name', 'products.slug',  \DB::raw('MIN(product_size_prices.price) as price'))
    //     ->groupBy('products.id', 'products.product_name', 'products.slug')
    //     ->get();

    //     $productId = $cart->pluck('id')->toArray();
    //     $productImages= Product::with('media')->whereIn('id', $productId)->get();
    //     return view('user.user_cart', compact('cart', 'productImages'));
    // }

    public function store(Request $request)
    {
        try {
            if (!Auth::check()) {
                return redirect('login');
            }

            $user_id = auth()->user()->id;
            $product_id = $request->product_id;

            $cart = DB::transaction(function () use ($user_id, $product_id, $request) {
                // Check if the product already exists in the user's cart
                $existingCart = Cart::where('user_id', $user_id)
                    ->where('product_id', $product_id)
                    ->first();

                if ($existingCart) {
                    // If the product exists, update the quantity
                    $existingCart->update([
                        'quantity' => $existingCart->quantity + $request->quantity
                    ]);
                    return $existingCart;
                } else {
                    // If the product doesn't exist, create a new entry
                    $cart = Cart::create([
                        'user_id' => $user_id,
                        'product_id' => $product_id,
                        'quantity' => $request->quantity,
                    ]);
                    return $cart;
                }
            });
            if ($cart) {
                return back()->with('success', 'Product Added to Cart!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
