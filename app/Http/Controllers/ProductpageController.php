<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductpageController extends Controller
{
    public function home_product()
    {
        // Ambil data dari berbagai model
        $categories = Category::all();
        $products = Product::all();

        // Kirim data ke view
        return view('content.product', compact('categories', 'products'));
    }

    public function detail_product()
    {
        // Ambil semua data produk
        $products = Product::all();

        // Ambil 4 data produk secara acak
        $randomProducts = Product::inRandomOrder()->take(4)->get();

        // Kirim data ke view
        return view('content.product-detail', compact('products', 'randomProducts'));
    }

    //search cari
    public function search(Request $request)
    {
        $categories = Category::all();

        $query = $request->input('query');
        $products = Product::where('product_name', 'LIKE', "%$query%")->get(); // Misalkan Anda mencari produk berdasarkan nama

        return view('content.product', compact('products', 'categories'));
    }

}
