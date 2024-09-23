<?php

namespace App\Http\Controllers;

use App\Models\Mhs;
use Illuminate\Http\Request;

class statctr extends Controller
{
    public function index(){
        $data = Mhs::where('npm', session('npm'))->first();
        return view("status", compact('data'));
    }
}
