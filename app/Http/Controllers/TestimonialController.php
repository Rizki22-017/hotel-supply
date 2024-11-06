<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonials', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'customer_review' => 'required|string',
        ]);

        $testimonials = new Testimonial();
        $testimonials->customer_name = $request->customer_name;
        $testimonials->customer_review = $request->customer_review;

        // Handle image upload
        if ($request->hasFile('customer_logo')) {
            $imagePath = $request->file('customer_logo')->store('testimonials', 'public');
            $testimonials->customer_logo = $imagePath;
        }

        $testimonials->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimnials added successfully.');
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
        $testimonials = Testimonial::findOrFail($id);
        return view('testimonials.edit', compact('testimonials'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'customer_review' => 'required|string',
        ]);

        $testimonials = Testimonial::findOrFail($id);
        $testimonials->customer_name = $request->customer_name;
        $testimonials->customer_review = $request->customer_review;

        // update jika ada foto baru
        if ($request->hasFile('customer_logo')) {
            $imagePath = $request->file('customer_logo')->store('testimonials', 'public');
            $testimonials->customer_logo = $imagePath;
        }

        $testimonials->save();
        return redirect()->route('testimonials.index')->with('success', 'Testimnials updates successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonials = Testimonial::findOrFail($id);

        // Hapus gambar dari storage jika ada
        if ($testimonials->customer_logo) {
            Storage::disk('public')->delete($testimonials->customer_logo);
        }

        $testimonials->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonials deleted successfully.');
    }
}
