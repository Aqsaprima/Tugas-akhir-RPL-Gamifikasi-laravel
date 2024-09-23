<?php

namespace App\Http\Controllers;

use App\Models\Peri;
use Illuminate\Http\Request;

class perictr extends Controller
{
    public function index(){
        $data = Peri::get();

        return view("peri", compact('data'));
    }
}
