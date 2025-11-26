<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/comment', function () {
    return view('comment');
});

Route::post('/comment', function () {
    return $_POST['content'];
});

