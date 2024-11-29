<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\About;
use App\Models\PasswordResetToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showLoginForm()
    {
        $about = About::first();
        return view('login.login', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Your input do not match our records, please try again.',
            'password' => 'Incorrect password, please try again.'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function forgot_pass()
    {
        return view('login.forgot-password');
    }

    public function forgot_pass_act(Request $request)
    {
        $customMessage = [
            'email.required' => 'Email cannot be empty',
            'email.email' => 'Invalid email',
            'email.exsists' => 'Email not registered in database'
        ];

        $request->validate([
            'email' => 'required|email|exists:users,email'
        ], $customMessage);

        $token = \Str::random(60);

        PasswordResetToken::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => now(),
            ]
            );

        Mail::to($request->email)->send(new ResetPasswordMail($token));

         return redirect()->route('forgot-pass')->with('success', 'Password reset link has been sent to your email');
    }

    public function val_forgot_pass(Request $request, $token)
    {
        $getToken = PasswordResetToken::where('token', $token)->first();

        if (!$getToken) {
            return redirect()->route('login')->with('failed', 'Invalid token');
        }

        return view('login.validasi-token', compact('token'));
    }

    public function val_forgot_pass_act(Request $request)
    {
        $customMessage = [
            'password.required' => 'Password cannot be empty',
            'password.min' => 'Password must be at least 8 characters'
        ];

        $request->validate([
            'password' => 'required|min:8'
        ], $customMessage);

        $token = PasswordResetToken::where('token', $request->token)->first();

        if (!$token) {
            return redirect()->route('login')->with('failed', 'Invalid token');
        }

        $user = User::where('email', $token->email)->first();

        if (!$user) {
            return redirect()->route('login')->with('failed', 'Email not registered in database');
        }

        $user->update([
            'password' => Hash::make($request->password)
        ]);

        $token->delete();

        return redirect()->route('login')->with('success', 'The password has been successfully reset');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
