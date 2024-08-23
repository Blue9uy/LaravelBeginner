<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }
    public function content(){
        $students=['MgMg','SuSu','AyeAye'];
        return view("content",compact("students"));
}}
