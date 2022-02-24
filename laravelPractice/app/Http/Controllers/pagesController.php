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

    public function registersubmit(Request $req)
    {
        $req->validate(
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'username'=>'required|min:5|max:10',
                'email'=>'required|email',
                'password'=>'required|min:8',
                'confirm_password'=>'required|same:password',

            ],
            [
                'name.regex'=>'Name cant be numeric value',
            ]
        );
        return "the form is submitted with $req->name";
    }
}
