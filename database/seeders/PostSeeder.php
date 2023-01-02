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
            "title" => "ვეფხისტყაოსანი"
        ]);

        Post::create([
            "title" => "random quotes"
        ]);

        Post::create([
            "title" => "ილია აკაკი"
        ]);

        Post::create([
            "title" => "კომუნიზმი"
        ]);

        Post::create([
            "title" => "speeches from naruto"
        ]);
    }
}
