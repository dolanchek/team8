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
    		"name" => "mongolia",
    		"content" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque praesentium, laudantium aspernatur quos doloremque optio distinctio, veniam voluptatum ipsa molestiae quidem aut doloribus animi. Explicabo obcaecati quisquam nobis earum porro?",
    		"amount" => 50000,
    		"paid" => 31000,
    		"image" => "images/volunteering-in-mongolia.1200.jpg",
    		"donaters" => 13000,
    		"finale" => 0,
    	]);
    }
}
