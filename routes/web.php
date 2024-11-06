<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;

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



Route::get('/product', function () {
    return view('content.product');
});

Route::get('/product-detail', function () {
    return view('content.product-detail');
});

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/tes', function () {
    return view('admin.tes');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.index');

Route::resource('categories', CategoryController::class);
Route::get('/categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::resource('products', ProductController::class);
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::get('abouts', [AboutController::class, 'index'])->name('abouts.index');
Route::get('abouts/create', [AboutController::class, 'create'])->name('abouts.create');
Route::post('abouts', [AboutController::class, 'store'])->name('abouts.store');
Route::get('abouts/edit', [AboutController::class, 'edit'])->name('abouts.edit'); // tanpa {about}
Route::put('abouts', [AboutController::class, 'update'])->name('abouts.update');
Route::delete('abouts', [AboutController::class, 'destroy'])->name('abouts.destroy');

Route::resource('testimonials', TestimonialController::class);
