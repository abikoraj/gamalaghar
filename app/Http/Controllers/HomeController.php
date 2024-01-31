<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        return view('home.home', compact('mainCategory'));
    }
}
