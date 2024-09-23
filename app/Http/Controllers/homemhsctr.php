<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homemhsctr extends Controller
{
    public function index(){
        return view("homeSiswa");
    }
}
