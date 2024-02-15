<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\CommonMark\Parser\Inline\BacktickParser;

class CartController extends Controller
{


    public function store(Request $request)
    {
        try {
            if (!Auth::check()) {
                return redirect('login');
            }

            $user_id = auth()->user()->id;
            $product_id = $request->product_id;
            $product_size_price_id= $request->product_size_price_id;

            $cart = DB::transaction(function () use ($user_id, $product_id, $product_size_price_id, $request) {
                // Check if the product already exists in the user's cart
                $existingCart = Cart::where('user_id', $user_id)
                    ->where('product_id', $product_id)
                    ->where('product_size_price_id', $product_size_price_id)
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
                        'product_size_price_id'=>$product_size_price_id,
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

    public function destroy($id){
        $cart=Cart::find($id);
        if (is_null($cart)) {
            return back()->with('error', 'Product Not Found!');
        }
        try {
            $cart=DB::transaction(function () use($cart){
                $cart->delete();
                return $cart;
            });
            if ($cart) {
                return back()->with('success', 'Product Deleted From Cart!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
