<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('content.homepage');
});


Route::get('/dashboard', function () {
    return view('admin.index');
});

Route::get('/categories', function () {
    return view('admin.categories');
});

Route::get('/products', function () {
    return view('admin.products');
});

Route::get('/testimonials', function () {
    return view('admin.testimonials');
});

Route::get('/about', function () {
    return view('admin.about');
});

Route::get('/product', function () {
    return view('content.product');
});

Route::resource('categories', CategoryController::class);

