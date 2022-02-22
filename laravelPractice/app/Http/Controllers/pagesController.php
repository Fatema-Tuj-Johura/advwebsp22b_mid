<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function login()
    {
        return view('home.logins.login');
    }

    public function register()
    {
        return view('home.logins.register');
    }
}
