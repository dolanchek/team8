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
}
