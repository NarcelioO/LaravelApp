<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('/products', function () {
    $search = request('search');
    return view('products',['search' => $search]);
});

Route::get('/product/{id?}', function ($id = null) {
    return view('product', ['id'=>$id]);
});



