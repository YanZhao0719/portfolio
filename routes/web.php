<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    //return ('this is about page');
    return view('about');
});

Route::get('/product', function () {
    //return ('this is product page');
    return view('product' , ['name' => 'Bounty']);
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('name/{name}', function ($name) {
    return ('My name is ' . $name);
});

Route::get('/product/{id}', function ($id) {
    return 'Product ' . $id;
});

Route::get('/user/{name}', function ($name = 'Guest') {
    return 'User ' . $name;
});

Route::get('/profile', function () {
    return 'I am route access via named.';
})->name('profile');
