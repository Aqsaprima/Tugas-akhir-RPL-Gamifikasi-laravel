<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homedosctr extends Controller
{
    public function index(){
        return view("homeDosen");
    }
}
