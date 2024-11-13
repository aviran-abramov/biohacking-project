<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/supplements', function () {
    return view('supplements');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/articles', function () {
    return view('articles');
});