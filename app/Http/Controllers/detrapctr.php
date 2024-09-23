<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Level;
use Illuminate\Http\Request;

class detrapctr extends Controller
{
    public function index(){
        return view("detailraport");
    }

    public function lihatrapot($id){
        $data = Jawaban::find($id);
        $level = Level::find($data->idSoal);
        return view("detailraport", compact('data','level'));
    }
}
