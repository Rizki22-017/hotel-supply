<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductpageController;
use App\Http\Controllers\TestimonialController;

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/product', [ProductpageController::class, 'home_product'])->name('home_product');
Route::get('/product-detail/{id}', [ProductpageController::class, 'detail_product'])->name('detail.product');




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

//cari
Route::get('/search', [ProductpageController::class, 'search'])->name('search');

//filter
Route::get('/filter', [ProductpageController::class, 'filter'])->name('filter');


//login-logout
Route::get('admin', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('admin', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


// untuk tes
Route::get('/tes', function () {
    return view('admin.tes');
});
Route::get('/tes2', function () {
    return view('admin.tes2');
});


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

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
