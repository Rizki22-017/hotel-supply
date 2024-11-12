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
        if ($request->hasFile('logo')) {
            $imagePath = $request->file('logo')->store('clients', 'public');
            $client->logo = $imagePath;
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
        if ($client->logo) {
            Storage::disk('public')->delete($client->logo);
        }

        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Logo deleted successfully');
    }
}
