<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class, 'index'] );
Route::get('/event/create',[EventController::class, 'create'] );


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



