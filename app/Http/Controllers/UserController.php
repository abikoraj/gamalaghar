<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Models\Cart;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\User;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth()->check()) {
            $countWishList = Wishlist::where('user_id', auth()->user()->id)->count();
        } else {
            $countWishList = "";
        }

        $cart = Cart::join('products', 'products.id', '=', 'carts.product_id')
        ->join('product_size_prices', 'product_size_prices.id', '=', 'carts.product_size_price_id')
        ->join('sizes', 'sizes.id', '=', 'product_size_prices.size_id')
        ->select('products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity', 'carts.id as cartid')
        ->groupBy('cartid', 'products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity')
        ->get();

        $productId = $cart->pluck('id')->toArray();
        $cartproductImages = Product::with('media')->whereIn('id', $productId)->get();

        
        $mainCategory = MainCategory::with('subcategories')->get();
        return view('auth.register',compact('mainCategory', 'countWishList', 'cartproductImages', 'cart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        if ($request->password !== $request->confirm_password) {
            return back()->with('error', 'Password does not match with Confirm Password!');
        }

        try {
            $user=DB::transaction(function() use($request){
                $user=User::create([
                    'name' => $request->fullname,
                    'email' => $request->email,
                    'phone'=>$request->phone,
                    'password' => Hash::make($request->password),
                    'email_verified_at'=>Carbon::today(),
                    'role'=>'user',
                ]);
                return $user;
            });
            if ($user) {
                return back()->with('success', 'You are registered successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}