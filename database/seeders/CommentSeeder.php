<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            "author" => "gogoschka-1",
            "comment" => "A Milestone Of Science Fiction And A Cyberpunk Masterpiece",
            "post_id" => 1
        ]);

        Comment::create([
            "author" => "Nazi_Fighter_David",
            "comment" => "An incredibly beautiful-looking film as one would expect with director Ridley Scott",
            "post_id" => 1
        ]);

        Comment::create([
            "author" => "tobbe_aik_9",
            "comment" => "Not your typical comicbook movie",
            "post_id" => 2
        ]);

        Comment::create([
            "author" => "CinemaClown",
            "comment" => "The Sci-Fi That Put The Science In Science Fiction",
            "post_id" => 3
        ]);

        Comment::create([
            "author" => "Smells_Like_Cheese",
            "comment" => "2001: A Cure for Insomnia",
            "post_id" => 3
        ]);

        Comment::create([
            "author" => "jackgdemoss",
            "comment" => "One of the most memorable plot twists of this decade",
            "post_id" => 4
        ]);

        Comment::create([
            "author" => "Chrysanthepop",
            "comment" => "An incredibly beautiful-looking film as one would expect with director Ridley Scott",
            "post_id" => 5
        ]);

        Comment::create([
            "author" => "DrWetter",
            "comment" => "Pixar does it again!",
            "post_id" => 5
        ]);
    }
}
