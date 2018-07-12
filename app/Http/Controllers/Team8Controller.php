<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Team8Controller extends Controller
{
    public function post($id){
        return view('post');
    }
    public function home(){
        return view('home');
    }
    public function profile(){
        return view('profile');
    }
    public function statistic(){
        return view('stats');
    }
    public function splash(){
        return view('splash_screen');
    }
}
