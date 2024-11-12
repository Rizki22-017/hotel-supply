<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    // Fungsi untuk menampilkan form
    public function showForm()
    {
        return view('content.homepage');
    }

    // Fungsi untuk mengirimkan email
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Kirim email menggunakan Mail facade
        Mail::to('nobodyloveme369@gmail.com')->send(new ContactMail($validated));

        // Redirect kembali dengan pesan sukses
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
