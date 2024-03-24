<?php

namespace App\Models;

class Blog
{
    private static $blog_posts =
    [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
