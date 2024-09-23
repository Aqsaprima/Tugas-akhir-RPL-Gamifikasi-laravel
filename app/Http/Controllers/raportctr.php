<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Mhs;
use Illuminate\Http\Request;

class raportctr extends Controller
{
    public function index(){
        $data = Jawaban::all();
        return view("raport", compact('data'));
    }

    public function accept(Request $request){
        $data = Mhs::where('npm', $request->npm)->first();
        $data->power += 1;
        $data->save();
        return redirect()->back()->with('berhasil', 'Jawaban telah diterima');
    }
}
