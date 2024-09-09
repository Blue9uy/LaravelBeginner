<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Models\Township;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = City::all();
        $townships = Township::all();
        return view("city",compact("cities",'townships'));
    }
}
