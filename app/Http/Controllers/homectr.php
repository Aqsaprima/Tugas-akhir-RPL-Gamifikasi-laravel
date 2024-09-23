<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homectr extends Controller
{
    public function index(){
        return view("home");
    }
}
