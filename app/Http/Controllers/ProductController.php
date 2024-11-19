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
            'product_category_id' => 'required|exists:categories,id',
            'product_color' => 'nullable|string',
            'product_material' => 'nullable|string',
            'product_description' => 'required|string',
            'product_size_chart' => 'nullable|string',
            'product_image' => 'nullable|image',
            'product_gallery.*' => 'nullable|image' // Validasi untuk galeri
        ]);

        $product = new Product();
        $product->product_name = $request->product_name;
        $product->product_category_id = $request->product_category_id;
        $product->product_color = $request->product_color;
        $product->product_material = $request->product_material;
        $product->product_description = $request->product_description;
        $product->product_size_chart = $request->product_size_chart;

        // Simpan gambar utama produk
        // Simpan gambar utama produk
        if ($request->hasFile('product_image')) {
            // Hapus gambar lama jika ada
            if ($product->product_image && file_exists(public_path($product->product_image))) {
                unlink(public_path($product->product_image));
            }

            // Tentukan lokasi penyimpanan
            $destinationPath = public_path('images/products');

            // Buat nama unik untuk file
            $fileName = time() . '_' . $request->file('product_image')->getClientOriginalName();

            // Pindahkan file ke folder tujuan
            $request->file('product_image')->move($destinationPath, $fileName);

            // Simpan path file ke database (relatif terhadap public/)
            $product->product_image = 'images/products/' . $fileName;
        }

        // Simpan galeri produk
        if ($request->hasFile('product_gallery')) {
            // Hapus gambar galeri lama jika ada
            if ($product->product_gallery) {
                $existingGallery = json_decode($product->product_gallery, true);
                foreach ($existingGallery as $oldGalleryImage) {
                    if (file_exists(public_path($oldGalleryImage))) {
                        unlink(public_path($oldGalleryImage));
                    }
                }
            }

            $galleryPaths = [];
            foreach ($request->file('product_gallery') as $galleryImage) {
                // Tentukan lokasi penyimpanan
                $destinationPath = public_path('images/product_galleries');

                // Buat nama unik untuk file
                $fileName = time() . '_' . $galleryImage->getClientOriginalName();

                // Pindahkan file ke folder tujuan
                $galleryImage->move($destinationPath, $fileName);

                // Tambahkan path file ke array
                $galleryPaths[] = 'images/product_galleries/' . $fileName;
            }

            // Konversi array paths menjadi JSON dan simpan ke database
            $product->product_gallery = json_encode($galleryPaths);
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
        $request->validate([
            'product_name' => 'required|string|max:255',
            'product_category_id' => 'required|exists:categories,id',
            'product_color' => 'nullable|string',
            'product_material' => 'nullable|string',
            'product_description' => 'required|string',
            'product_size_chart' => 'nullable|string',
            'product_image' => 'nullable|image',
            'product_gallery.*' => 'nullable|image'
        ]);

        $product = Product::findOrFail($id);

        $product->product_name = $request->product_name;
        $product->product_category_id = $request->product_category_id;
        $product->product_color = $request->product_color;
        $product->product_material = $request->product_material;
        $product->product_description = $request->product_description;
        $product->product_size_chart = $request->product_size_chart;

        // Update gambar utama produk
        if ($request->hasFile('product_image')) {
            // Hapus gambar lama jika ada
            if ($product->product_image && file_exists(public_path($product->product_image))) {
                unlink(public_path($product->product_image));
            }

            // Tentukan lokasi penyimpanan
            $destinationPath = public_path('images/products');

            // Buat nama unik untuk file
            $fileName = time() . '_' . $request->file('product_image')->getClientOriginalName();

            // Pindahkan file ke folder tujuan
            $request->file('product_image')->move($destinationPath, $fileName);

            // Simpan path file baru ke database (relatif terhadap public/)
            $product->product_image = 'images/products/' . $fileName;
        }

        // Update galeri produk
        if ($request->hasFile('product_gallery')) {
            // Hapus galeri lama jika ada
            $oldGallery = json_decode($product->product_gallery, true);
            if ($oldGallery) {
                foreach ($oldGallery as $oldImage) {
                    if (file_exists(public_path($oldImage))) {
                        unlink(public_path($oldImage));
                    }
                }
            }

            $galleryPaths = [];
            foreach ($request->file('product_gallery') as $galleryImage) {
                // Tentukan lokasi penyimpanan
                $destinationPath = public_path('images/product_galleries');

                // Buat nama unik untuk file
                $fileName = time() . '_' . $galleryImage->getClientOriginalName();

                // Pindahkan file ke folder tujuan
                $galleryImage->move($destinationPath, $fileName);

                // Tambahkan path file ke array
                $galleryPaths[] = 'images/product_galleries/' . $fileName;
            }

            // Simpan path galeri baru dalam format JSON ke database
            $product->product_gallery = json_encode($galleryPaths);
        }

        // Simpan perubahan ke database
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Hapus gambar utama
        if ($product->product_image && Storage::disk('public')->exists($product->product_image)) {
            Storage::disk('public')->delete($product->product_image);
        }

        // Hapus galeri produk
        if ($product->product_gallery) {
            $galleryImages = json_decode($product->product_gallery, true);

            if (is_array($galleryImages)) {
                foreach ($galleryImages as $galleryImage) {
                    if (Storage::disk('public')->exists($galleryImage)) {
                        Storage::disk('public')->delete($galleryImage);
                    }
                }
            }
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
