<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
    //   $request->validate([
    //     'name'         =>   'required',
    //     'email'        =>   'required|email|unique:users',
    //     'password'     =>   'required|min:6'
    // ]);

    // $data = $request->all();

    User::create([
        'username'  =>  $request->username,
        'email' =>  $request->email,
        'password' => Hash::make($request->password),
        'user_id' => auth()->id()
    ]);

    return redirect('login')->with('success', 'Registration Completed, now you can login');
}

    }
