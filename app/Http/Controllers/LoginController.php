<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('auth.login');//auth itu nama folder ki
    }

    public function register(){
        return view('auth.register');
    }
}
