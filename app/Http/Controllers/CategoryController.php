<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all(); // Ambil data kategori dari database
        return view('admin.categories', compact('categories')); // Panggil 'admin.categories'
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;

        // Handle image upload
        if ($request->hasFile('category_image')) {
            $imagePath = $request->file('category_image')->store('categories', 'public');
            $category->category_image = $imagePath;
        }

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Category added successfully.');
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
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $category = Category::findOrFail($id);
        $category->nama = $request->nama;
        $category->deskripsi = $request->deskripsi;

        if ($request->hasFile('gambar')) {
            $filename = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('images/categories'), $filename);
            $category->gambar = $filename;
        }

        $category->save();

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        if ($category->gambar && file_exists(public_path('images/categories/' . $category->gambar))) {
            unlink(public_path('images/categories/' . $category->gambar));
        }
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
