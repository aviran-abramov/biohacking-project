<?php

use App\Models\Supplement;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/supplements', function () {
    return view('supplements', [
        "supplements" => Supplement::orderBy('name')->get()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/articles', function () {
    return view('articles');
});

Route::get('/products', function () {
    return view('products');
});