<?php

namespace App\Http\Controllers;

use App\Models\Vocalist;
use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index(){
        $vocalists=Vocalist::all();
        $songs = Song::all();
        return view("song",compact("vocalists",'songs'));
    }
}
