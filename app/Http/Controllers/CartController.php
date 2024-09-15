<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Extension\CommonMark\Parser\Inline\BacktickParser;

class CartController extends Controller
{


    public function index()
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
            $cartproductImages = Product::with('media', 'productImages')->whereIn('id', $productId)->get();
        } else {
            $countWishList = "";
            $countCarts = "";
            $cart = [];
            $cartproductImages = [];
        }
        return view('user.user_cart', compact('mainCategory', 'countWishList', 'countCarts', 'cart', 'cartproductImages', 'relatedProducts'));
    }

    public function store(Request $request)
    {
        try {
            if (!Auth::check()) {
                return redirect('login');
            }

            $user_id = auth()->user()->id;
            $product_id = $request->product_id;
            $product_size_price_id = $request->product_size_price_id;

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
                        'product_size_price_id' => $product_size_price_id,
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

    public function destroy($id)
    {
        $cart = Cart::find($id);
        if (is_null($cart)) {
            return back()->with('error', 'Product Not Found!');
        }
        try {
            $cart = DB::transaction(function () use ($cart) {
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

    public function checkout(Request $request)
    {
        // Retrieve selected product IDs from the form submission
        $selectedProductIds = $request->input('selectedProducts', []);
        if (!$selectedProductIds) {
            return back()->with('error', 'Please select products');
        }

        // Retrieve products based on the selected IDs
        $selectedProducts = Cart::join('products', 'products.id', '=', 'carts.product_id')
            ->join('product_size_prices', 'product_size_prices.id', '=', 'carts.product_size_price_id')
            ->join('sizes', 'sizes.id', '=', 'product_size_prices.size_id')
            ->select('products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity', 'carts.id as cartid', 'carts.user_id')
            ->groupBy('cartid', 'products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity', 'carts.user_id')
            ->where('carts.user_id', auth()->user()->id)
            ->whereIn('carts.id', $selectedProductIds)->get();



        // dd($cartproductImages);

        // Store the selected products in the session
        $request->session()->put('selectedProducts', $selectedProducts);

        return redirect()->route('checkout'); // Assuming you have a named route for your checkout page
    }

    public function smallCartCheckout(Request $request){
        $selectedProducts = Cart::join('products', 'products.id', '=', 'carts.product_id')
        ->join('product_size_prices', 'product_size_prices.id', '=', 'carts.product_size_price_id')
        ->join('sizes', 'sizes.id', '=', 'product_size_prices.size_id')
        ->select('products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity', 'carts.id as cartid', 'carts.user_id')
        ->groupBy('cartid', 'products.id', 'products.product_name', 'products.slug', 'product_size_prices.price', 'sizes.size', 'carts.quantity', 'carts.user_id')
        ->where('carts.user_id', auth()->user()->id)
        ->get();

        $request->session()->put('selectedProducts', $selectedProducts);
        return redirect()->route('checkout');
    }

    public function updateCartQuantity(Request $request, $id)
    {


        // Retrieve the cart item
        $cart = Cart::find($id);
        $cart->update([
            'quantity'=>$request->query('quantity')
        ]);



        $subtotal = $cart->price * $cart->quantity;
        return back()->with('success','Quantity Updated Successfully!');
    }
}
