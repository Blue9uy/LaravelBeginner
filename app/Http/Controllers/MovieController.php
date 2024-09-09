<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Serie;
use App\Models\Tag;
class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();
        $series = Serie::all();
        $tags = Tag::all();
        return view("movie",compact("movies","series","tags"));
    }
}
