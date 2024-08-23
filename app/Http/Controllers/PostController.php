<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function contact(){
        return view("contact");
    }
    public function home(){
        return view("welcome");
}
    public function post($id,$name){

        return view("post",compact("id","name"));
}
}
