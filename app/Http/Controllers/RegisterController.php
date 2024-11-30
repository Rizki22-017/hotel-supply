<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        if (User::exists()) {
            return redirect()->route('login')->withErrors(['register' => 'Error! Only 1 master account can register, please login']);
        }
        return view('login.register');
    }

    public function register(Request $request)
    {

    // dd($request->all());

    if (User::exists()) {
        return redirect()->route('login')->withErrors(['register' => 'Error! Only 1 master account can register, please login']);
    }

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|confirmed|min:8',
    ]);


    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')->with('success', 'Akun berhasil dibuat. Silakan login.');
    }
}
