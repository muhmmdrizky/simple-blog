<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'Muhammad Rizky',
            'username' => 'muhammadrizky',
            'email' => 'muhammadrizky@gmail.com',
            'password' => bcrypt('muhammadrizky')
        ]);

        // User::create([
        //     'name' => 'Mohammad Ahsan',
        //     'email' => 'mohammadahsan@gmail.com',
        //     'password' => bcrypt('ahsan')
        // ]);

        // User::create([
        //     'name' => 'Hendra Setiawan',
        //     'email' => 'hendrasetiawan@gmail.com',
        //     'password' => bcrypt('hendra')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Mobile Programming',
            'slug' => 'mobile-programming'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning'
        ]);

        Post::factory(20)->create();
    }
}
