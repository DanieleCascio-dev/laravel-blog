<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
         for ($i=0; $i <10 ; $i++) { 
            $new_post = new Post();
            $new_post->user_id = 7;
            $new_post ->title =  $faker->word(rand(1,3),true);
            $new_post->body = $faker->paragraphs(rand(3,8), true);
            $new_post->save();

        } 
    }
}
