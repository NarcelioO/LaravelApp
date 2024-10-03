<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $name = 'Mateus';
    $age = 12;
    $arr = [1,2,3,4,5];
    $pessoas = [
        'name',
        'name',
        'name',
        'name'

    ];
    return view('welcome',
    [
        'name'=>$name, 
        'age'=> $age,
        'arr'=>$arr,
        'pessoas'=>$pessoas
    ]

);
});


Route::get('/about', function () {
    return view('about');
});
