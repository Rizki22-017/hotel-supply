<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

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

    public function home()
    {
        $categories = Category::inRandomOrder()->take(4)->get();
        return view('content.homepage', compact('categories'));
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
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
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
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'required|string',
            'category_image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $category = Category::findOrFail($id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;

        // Update image if a new one is uploaded
        if ($request->hasFile('category_image')) {
            $imagePath = $request->file('category_image')->store('categories', 'public');
            $category->category_image = $imagePath;
        }

        $category->save();
        return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        // Cek apakah ada produk terkait dengan kategori ini
        if ($category->products()->count() > 0) {
            return redirect()->route('categories.index')->with('error', 'Cannot delete category with associated products.');
        }

        // Hapus gambar dari storage jika ada
        if ($category->category_image) {
            Storage::disk('public')->delete($category->category_image);
        }

        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully.');
    }
}
