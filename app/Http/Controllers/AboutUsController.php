<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){

        $mainCategory = MainCategory::with('subcategories')->get();

        if (auth()->check()) {
            $countWishList = Wishlist::where('user_id', auth()->user()->id)->count();
        } else {
            $countWishList = "";
        }
       
        return view('about_us.about_us',compact('mainCategory', 'countWishList'));
    }
}