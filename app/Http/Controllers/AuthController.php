<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function save_registration(Request $request)
    {
        // return request()->all();
        $validated_data = $request->validate([
            'name'     => 'required',
            'username' => 'required|min:4|max:32|unique:users',
            'email'    => 'required|email|unique:users|',
            'password' => 'required|min:4|max:255'
        ]);

        $validated_data['password'] = bcrypt($validated_data['password']);

        User::create($validated_data);

        return redirect('/login')->with('message', 'You\'ve been registered, now you can login!');
    }
}