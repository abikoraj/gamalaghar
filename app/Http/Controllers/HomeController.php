<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        $product= Product::with('media')->latest()->get();
        if(auth()->check()){
            $countWishList = Wishlist::where('user_id', auth()->user()->id)->count();
        }
        else{
            $countWishList="";
        }
       
      
        return view('home.home', compact('mainCategory', 'product', 'countWishList'));
    }


}