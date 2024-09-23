<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;

class materictr extends Controller
{
    public function index(){
        $data = Level::where('id', session('idsoal'))->first();
        return view("materi", compact('data'));
    }
}
