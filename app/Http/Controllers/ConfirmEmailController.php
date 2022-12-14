<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmEmailController extends Controller
{
    //
    public function index()
    {
        return view('auth.confirmEmail');
    }
}
