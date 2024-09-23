<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class addtaskctr extends Controller
{
    public function index(){
        return view("addTask");
    }

    public function upSoal(Request $request){
        $validator = Validator::make($request->all(),[
            "soal"      => 'required',
            "materi"    => 'required',
            "jwb1"      => 'required',
            "jwb2"      => 'required',
            "jwb3"      => 'required',
            "jwb4"      => 'required',
            "jawaban"   => 'required',
            "url"       => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['soal']   = $request->soal;
        $data['materi']   = $request->url;
        $data['jwbA']   = $request->jwb1;
        $data['jwbB']   = $request->jwb2;
        $data['jwbC']   = $request->jwb3;
        $data['jwbD']   = $request->jwb4;
        $data['jwbBenar']   = $request->jawaban;

        Level::whereId($request->materi)->update($data);

        return redirect()->back()->with('pesan', 'soal berhasil di upload');
    }
}
