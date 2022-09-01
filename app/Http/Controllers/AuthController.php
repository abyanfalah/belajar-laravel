<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login', [
            "title" => 'login'
        ]);
    }

    public function auth(Request $request)
    {
        $validated_credentials = $request->validate([
            'username'    => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($validated_credentials)) {
            $name = User::where('username', $validated_credentials)->first()->name;

            request()->session()->regenerate();
            session('name', $name);
            return redirect()->intended('/dashboard')->with('message', 'welcome ' . $name);
        }

        return back()->with([
            "loginMessage" => "Invalid Credentials"
        ]);
    }

    public function logout(Request $request)
    {
        // dd($request);

        Auth::logout();

        // request()->session()->invalidate();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
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
            'email'    => 'required|email:dns|unique:users|',
            'password' => 'required|min:4|max:255'
        ]);

        $validated_data['password'] = bcrypt($validated_data['password']);

        User::create($validated_data);

        return redirect('/login')->with('registration_message', 'You\'ve been registered, now you can login!');
    }
}
