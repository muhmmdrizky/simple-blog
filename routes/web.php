<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view(
        'frontend/home',
        [
            "title" => "home"
        ]
    );
});

Route::get('/about', function () {
    return view(
        'frontend/about',
        [
            "title" => "about",
            "name" => "Muhammad Rizky",
            "job" => "Software Engineer"
        ]
    );
});


Route::get('/blog', [BlogController::class, 'index']);

// single post page
Route::get('/blog/{slug}', [BlogController::class, 'read']);
