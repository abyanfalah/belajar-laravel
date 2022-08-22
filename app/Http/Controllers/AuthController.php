<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('login', [
            "title" => 'login'
        ]);
    }

    public function logout()
    {
        return 'logout';
    }

    public function registration()
    {
        return view('registration', [
            "title" => 'registration'
        ]);
    }
}