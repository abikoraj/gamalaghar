<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\User;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        $user = User::with('userDetail')->where('id', auth()->user()->id)->first();
        return view('user.profile', compact('mainCategory', 'user'));
    }
}
