<?php

namespace App\Http\Controllers;

use App\Models\Bos;
use App\Models\Mhs;
use Illuminate\Http\Request;

class bossctr extends Controller
{
    public function index(){
        $data = Bos::get();
        $mhs = Mhs::where('npm', session('npm'))->first();

        return view("boss", compact('data','mhs'));
    }
}
