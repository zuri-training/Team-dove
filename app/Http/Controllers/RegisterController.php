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
       $request->validate([
         'firstname'  => 'required',
         'lastname'   => 'required',
         'email'      => 'required|email|unique:users',
         'password'   => 'required|min:6'
     ]);

     $data = $request->all();

        User::create([
            'firstname'     => $request->firstname,
            'lastname'      => $request->lastname,
            'username'      => strtolower($request->firstname.$request->lastname),
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'user_id'       => auth()->id()
        ]);

        return redirect('login')->with('success', 'Registration Completed, now you can login');
    }

}
