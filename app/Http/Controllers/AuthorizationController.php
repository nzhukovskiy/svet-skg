<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthorizationController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route("home");
        }

        return back()->withErrors([
            'email' => 'Введены некорректные данные',
        ])->onlyInput('email');
    }

    public function show_login() {
        return view("login");
    }

    public function register(Request $request) {
        $user = new User();
        $request->validate([
            'name' => 'required|unique:users|min:4|max:255',
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route("show_login");
    }

    public function show_register() {
        return view("register");
    }

    public function logout() {
        Auth::logout();
        return redirect()->route("show_login");
    }
}
