<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function index()
    {
        $mainCategory = MainCategory::with('subcategories')->get();
        $user = User::with('userDetail')->where('id', auth()->user()->id)->first();
        return view('user.profile', compact('mainCategory', 'user'));
    }

    public function edituserdetails(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if (is_null($user)) {
            return back()->with('error', 'User not Found!');
        }
        try {
            $user = DB::transaction(function () use ($user, $request) {
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                ]);
                $user->userDetail()->updateOrCreate([
                    // 'user_id'=>auth()->user()->id,
                    'address' => $request->address,
                    'shipping_address' => $request->shipping_address,
                    'secondary_phone' => $request->secondary_phone,
                ]);
                return $user;
            });
            if ($user) {
                return back()->with('success', 'Details Edited Successfully!');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
}
