<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::all();  // Mengambil semua data client
        return view('admin.client', compact('clients'));  // Mengirimkan variabel $clients ke view
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $client = new Client();
        $client->name = $request->input('name');  // Menyimpan data name dari input form
        if ($request->hasFile('logo')) {
            // Tentukan lokasi penyimpanan
            $destinationPath = public_path('images/clients');

            // Buat nama unik untuk file
            $fileName = time() . '_' . $request->file('logo')->getClientOriginalName();

            // Pindahkan file ke folder tujuan
            $request->file('logo')->move($destinationPath, $fileName);

            // Simpan path relatif ke database
            $client->logo = 'images/clients/' . $fileName;
        }

        $client->save();

        return redirect()->route('clients.index')->with('success', 'Logo added successfully');
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
        $client = Client::findOrFail($id);
        // Hapus file logo dari folder public jika ada
        if ($client->logo && file_exists(public_path($client->logo))) {
            unlink(public_path($client->logo));
        }

        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Logo deleted successfully');
    }
}
