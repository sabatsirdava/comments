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
            "author" => "რუსთაველი",
            "comment" => "იყო არაბეთს როსტევან მეფე ღმრთისაგან სვიანი",
            "post_id" => 1
        ]);

        Comment::create([
            "author" => "ავთანდილი",
            "comment" => "სიცრუე და ორპირობა ავნებს ხორცსა მერმე სულსა",
            "post_id" => 1
        ]);

        Comment::create([
            "author" => "Someone",
            "comment" => "no pain no gain",
            "post_id" => 2
        ]);

        Comment::create([
            "author" => "ილია ჭავჭავაძე",
            "comment" => "მოძრაობა და მხოლოდ მოძრაობა  ჩემო თერგო",
            "post_id" => 3
        ]);

        Comment::create([
            "author" => "აკაკი წერეთელი",
            "comment" => "ვინც მეტსა გრძნობს, იმას უფრო ხშირად უტყდება გული.",
            "post_id" => 3
        ]);

        Comment::create([
            "author" => "სტალინი",
            "comment" => "არ უნდა? კედელთან",
            "post_id" => 4
        ]);

        Comment::create([
            "author" => "ლენინი",
            "comment" => "სწავლა სწავლა და სწავლა",
            "post_id" => 5
        ]);

        Comment::create([
            "author" => "obito",
            "comment" => "A true leader can let others step on his corpse, but he will never step on his comrades",
            "post_id" => 5
        ]);
    }
}
