<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Team8Controller extends Controller
{
    public function slash(){
        return redirect('redirect');
    }
    public function post($id){
        $post = Post::find($id);
        return view('post',compact('id'),compact('post'));
    }
    public function home(){
        $posts = Post::all();
        return view('home',compact('posts'));
    }
    public function profile(){
        return view('profile');
    }
    public function statistic(){
        $posts = Post::all();
        return view('stats',compact('posts'));
    }
    public function splash(){
        return view('splash_screen');
    }
    public function donate(Request $req,$id){
        $post = Post::find($id);
        $cash = $post->paid;
        $cash = $cash + $req->cash;
        $donaters = $post->donaters;
        $donaters = $donaters + 1;
        if($cash > $post->amount){
            $post->update(['finale' => 1,'paid' => $cash,'donaters' => $donaters]);
        } else{
            $post->update(['paid' => $cash,'donaters' => $donaters]);
        }
        return redirect('/post/'.$id);
        /*$cash = $cash + $req->cash;
        /*$fakearray = "[".$req->cash."]";
        if($cash > $post->amount){
            $post->update(['finale' => 1,'paid' => $cash,'donaters' => $donaters]);
        } else{
            $post->update(['paid' => $cash,'donaters' => $donaters]);
        }
        return redirect('/post/'.$id);*/
    }
    public function settings(){
        return view('settings');
    }
    public function admin(){
        return view('adminAdd');
    }
    public function createPost(){
        return view('addPost');
    }
    public function UploadPost(Request $req){
        $post = Post::create([
            "name" => $req->name,
            "content" => $req->content,
            "amount" => $req->amount,
            "image" => $req->image,
            "donaters" => 0,
            "paid" => 0,
            "finale" => 0
        ]);
        return redirect('/stats');
    }
}
