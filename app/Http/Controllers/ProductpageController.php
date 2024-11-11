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

    public function detail_product($id)
    {
        $product = Product::find($id);

        $randomProducts = Product::inRandomOrder()->take(4)->get();

        // Kirim data ke view
        return view('content.product-detail', compact('product', 'randomProducts'));
    }

    //search cari
    public function search(Request $request)
    {
        $categories = Category::all();

        $query = $request->input('query');
        $products = Product::where('product_name', 'LIKE', "%$query%")->get(); // Misalkan Anda mencari produk berdasarkan nama

        return view('content.product', compact('products', 'categories'));
    }

    // filter
    public function filter(Request $request)
    {
    $categoryId = $request->input('category_id');
    $category = Category::find($categoryId);
    $products = Product::where('product_category_id', $categoryId)->get(); // Ambil data berdasarkan category_id
    return view('content.result', compact('products', 'category'));
    }

}
