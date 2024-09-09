<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use App\Models\Like;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        $videos=Video::all();
        $comments=Comment::all();
        $likes=Like::all();
        return view("video",compact("videos","comments","likes"));
    }
}
