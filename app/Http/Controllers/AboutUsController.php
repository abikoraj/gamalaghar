<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){

        $mainCategory = MainCategory::with('subcategories')->get();
       
        return view('about_us.about_us',compact('mainCategory'));
    }
}