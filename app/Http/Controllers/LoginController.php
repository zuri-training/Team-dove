<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
use App\Models\User;


class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }
    public function login( Request $request)
    {
       if (Auth::attempt($request->only(keys, 'email', 'password'))){

      

        return redirect('home')->with('success', 'Login details are not valid');
    }

    return back()->with('error', 'Your credentials are incorrect');
}
}
