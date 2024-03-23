<?php

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


Route::get('/blog', function () {

    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Muhammad Rizky",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi et fugit, ad ea amet iste dolores illum sint dignissimos voluptatem hic dicta autem natus eius atque recusandae quidem, quis quos mollitia nihil. Aliquid molestias blanditiis iusto optio quisquam alias nostrum reprehenderit ipsa unde porro illo tenetur nulla cumque voluptates, vel nihil pariatur dolores eaque deleniti dignissimos vero quidem hic. Temporibus itaque atque, doloribus vero laboriosam dicta quisquam obcaecati quas quae reprehenderit praesentium omnis, sit natus est sint necessitatibus adipisci alias."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Mohammad Ahsan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi et fugit, ad ea amet iste dolores illum sint dignissimos voluptatem hic dicta autem natus eius atque recusandae quidem, quis quos mollitia nihil. Aliquid molestias blanditiis iusto optio quisquam alias nostrum reprehenderit ipsa unde porro illo tenetur nulla cumque voluptates, vel nihil pariatur dolores eaque deleniti dignissimos vero quidem hic. Temporibus itaque atque, doloribus vero laboriosam dicta quisquam obcaecati quas quae reprehenderit praesentium omnis, sit natus est sint necessitatibus adipisci alias. Temporibus itaque atque, doloribus vero laboriosam dicta quisquam obcaecati quas quae reprehenderit praesentium omnis, sit natus est sint necessitatibus adipisci alias. Temporibus itaque atque, doloribus vero laboriosam dicta quisquam obcaecati quas quae reprehenderit praesentium omnis, sit natus est sint necessitatibus adipisci alias."
        ],
    ];
    return view(
        'frontend/blog',
        [
            "title" => "blog",
            "posts" => $blog_posts
        ]
    );
});

// single post page
Route::get('/blog/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Post Pertama",
            "slug" => "post-pertama",
            "author" => "Muhammad Rizky",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi et fugit, ad ea amet iste dolores illum sint dignissimos voluptatem hic dicta autem natus eius atque recusandae quidem, quis quos mollitia nihil. Aliquid molestias blanditiis iusto optio quisquam alias nostrum reprehenderit ipsa unde porro illo tenetur nulla cumque voluptates, vel nihil pariatur dolores eaque deleniti dignissimos vero quidem hic. Temporibus itaque atque, doloribus vero laboriosam dicta quisquam obcaecati quas quae reprehenderit praesentium omnis, sit natus est sint necessitatibus adipisci alias."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "post-kedua",
            "author" => "Mohammad Ahsan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi et fugit, ad ea amet iste dolores illum sint dignissimos voluptatem hic dicta autem natus eius atque recusandae quidem, quis quos mollitia nihil. Aliquid molestias blanditiis iusto optio quisquam alias nostrum reprehenderit ipsa unde porro illo tenetur nulla cumque voluptates, vel nihil pariatur dolores eaque deleniti dignissimos vero quidem hic. Temporibus itaque atque, doloribus vero laboriosam dicta quisquam obcaecati quas quae reprehenderit praesentium omnis, sit natus est sint necessitatibus adipisci alias. Temporibus itaque atque, doloribus vero laboriosam dicta quisquam obcaecati quas quae reprehenderit praesentium omnis, sit natus est sint necessitatibus adipisci alias. Temporibus itaque atque, doloribus vero laboriosam dicta quisquam obcaecati quas quae reprehenderit praesentium omnis, sit natus est sint necessitatibus adipisci alias."
        ],
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view(
        'frontend/read',
        [
            "title" => "blog",
            "post" => $new_post
        ]
    );
});
