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
        // Validasi data form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            // Kirim email (jika menggunakan Mailables)
            Mail::to('nobodyloveme369@gmail.com')->send(new ContactMail($request));

            // Menambahkan pesan sukses ke session
            return back()->with('success', 'Message sent successfully!');
        } catch (\Exception $e) {
            // Jika email gagal, kirim pesan error
            return back()->with('error', 'Failed to send message.');
        }
    }
}
