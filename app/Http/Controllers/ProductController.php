<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all(); // Mengambil semua kategori
        $products = Product::with('category')->get();
        return view('admin.products', compact('products', 'categories'));
    }

    public function home()
    {
        $categories = Category::all(); // Mengambil semua kategori
        $products = Product::with('category')->get();
        return view('content.homepage', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_category_id' => 'required|exists:categories,id', // Validasi kategori
            'product_color' => 'nullable|string',
            'product_material' => 'nullable|string',
            'product_description' => 'required|string',
            'product_size_chart' => 'nullable|string',
            'product_image' => 'nullable|image',
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_category_id = $request->product_category_id;
        $product->product_color = $request->product_color;
        $product->product_material = $request->product_material;
        $product->product_description = $request->product_description;
        $product->product_size_chart = $request->product_size_chart;

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('products', 'public');
            $product->product_image = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        // Ambil semua kategori untuk dropdown
        $categories = Category::all();

        // Kembalikan view edit dengan data produk dan kategori
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi data yang diinput
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_category_id' => 'required|exists:categories,id',
            'product_color' => 'nullable|string',
            'product_material' => 'nullable|string',
            'product_description' => 'required|string',
            'product_size_chart' => 'nullable|string',
            'product_image' => 'nullable|image', // Validasi untuk gambar
        ]);

        // Cari produk berdasarkan ID
        $product = Product::findOrFail($id);

        // Update data produk
        $product->product_name = $request->product_name;
        $product->product_category_id = $request->product_category_id;
        $product->product_color = $request->product_color;
        $product->product_material = $request->product_material;
        $product->product_description = $request->product_description;
        $product->product_size_chart = $request->product_size_chart;

        // Jika ada file gambar yang diupload, update gambar
        if ($request->hasFile('product_image')) {
            // Hapus gambar lama jika ada
            if ($product->product_image) {
                Storage::delete($product->product_image);
            }
            // Simpan gambar baru dan perbarui path gambar di database
            $product->product_image = $request->file('product_image')->store('products', 'public');
        }

        // Simpan perubahan
        $product->save();

        // Redirect kembali ke halaman produk dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Cek apakah produk memiliki gambar yang tersimpan
        if ($product->product_image) {
            // Hapus gambar dari storage
            Storage::disk('public')->delete($product->product_image);
        }

        // Hapus produk dari database
        $product->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
