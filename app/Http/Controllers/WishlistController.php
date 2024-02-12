<?php

namespace App\Http\Controllers;

use App\Http\Requests\Wishlist\WishlistCreateRequest;
use App\Models\MainCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WishlistController extends Controller
{
    public function index(){
        $mainCategory = MainCategory::with('subcategories')->get();
        return view('wishlist.wishlist', compact('mainCategory'));
    }

    public function store(WishlistCreateRequest $request){
        try {
            $wishlist= DB::transaction(function() use($request) {
                $wishlist= Wishlist::create([
                    'user_id'=>auth()->user()->id,
                    'product_id'=>$request->product_id,
                ]);
                return $wishlist;
            });
            if ($wishlist) {
                return back()->with('success', 'Product Added Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
