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

Route::get('/product-detail', function () {
    return view('content.product-detail');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::resource('categories', CategoryController::class);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
