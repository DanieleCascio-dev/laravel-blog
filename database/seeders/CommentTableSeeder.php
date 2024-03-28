<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i=0; $i <30 ; $i++) { 
            $new_comment = new Comment();
            $new_comment->user_id = 7;
            $new_comment->post_id = rand(1,10);        
            $new_comment->body = $faker->paragraphs(rand(1,3), true);
            $new_comment->save();

        } 
    }
}
