<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view(
            'frontend/blog',
            [
                "title" => "blog",
                "posts" => Blog::all()
            ],
        );
    }

    public function read($slug)
    {
        return view(
            'frontend/read',
            [
                "title" => "blog",
                "post" => Blog::find($slug)
            ]
        );
    }
}
