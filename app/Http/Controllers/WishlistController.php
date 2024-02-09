<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index(){
        $mainCategory = MainCategory::with('subcategories')->get();
        return view('wishlist.wishlist', compact('mainCategory'));

    }
}
