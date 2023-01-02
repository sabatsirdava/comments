<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            "title" => "Blade Runner"
        ]);

        Post::create([
            "title" => "Watchmen"
        ]);

        Post::create([
            "title" => "2001: A Space Odyssey"
        ]);

        Post::create([
            "title" => "Shutter Island"
        ]);

        Post::create([
            "title" => "WALL·E"
        ]);
    }
}
