<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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
