<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.About');
});

Route::get('/register', function () {
    return view('auths.register'); 
});