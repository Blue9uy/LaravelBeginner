<?php

namespace App\Http\Controllers;

use App\Models\Nrc;
use Illuminate\Http\Request;
use App\Models\People;


class PeopleController extends Controller
{
    public function index(){
        $people = People::all();
        $nrc = Nrc::all();
        return view("people", compact("people",'nrc'));
    }
}
