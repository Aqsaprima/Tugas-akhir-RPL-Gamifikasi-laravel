<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class roomctr extends Controller
{
    public function index(){
        return view("room");
    }
}
