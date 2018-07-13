<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Post::create([
    		"name" => "Mongolia",
    		"content" => "Mongolia is a country in East Asia. It is bordered by Russia to the North and china to the East, South and West. It is one of the largest landlocked countries in the world",
    		"amount" => 800,
    		"paid" => 687.16,
    		"image" => "images/volunteering-in-mongolia.1200.jpg",
    		"donaters" => 14263,
    		"finale" => 0,
    	]);
    }
}
