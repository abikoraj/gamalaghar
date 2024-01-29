<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\CreateUserRequest;
use App\Models\User;
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
        return view('auth.register');
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
