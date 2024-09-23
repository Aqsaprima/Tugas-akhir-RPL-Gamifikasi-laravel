<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class tugasctr extends Controller
{
    public function index(){
        $idsoal = session('idsoal');
        $data = Level::where('id', $idsoal)->first();
        return view("tugas", compact('data'));
    }

    public function upJawaban(Request $request){
        $validator = Validator::make($request->all(),[
            'jawaban'   => 'required',
            'kode'      => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['idSoal']     = session('idsoal');
        $data['npm']        = session('npm');
        $data['jwbAlgo']    = $request->jawaban;
        $data['jwbCode']    = $request->kode;

        Jawaban::create($data);

        return redirect()->back()->with('pesan', 'jawaban berhasil disimpan');
    }
}
