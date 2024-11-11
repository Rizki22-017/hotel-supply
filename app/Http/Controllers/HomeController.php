<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Client;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        // Ambil data dari berbagai model
        $categories = Category::all();
        $products = Product::all();
        $about = About::first();  // Asumsi hanya ada satu record About
        $testimonials = Testimonial::all();
        $clients = Client::all();

        // Kirim data ke view
        return view('content.homepage', compact('categories', 'products', 'about', 'testimonials', 'clients'));
    }
}
