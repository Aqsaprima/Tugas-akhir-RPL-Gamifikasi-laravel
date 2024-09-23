<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logdosctr extends Controller
{
    public function index(){
        return view("loginDosen");
    }

    public function verifikasi(Request $request){
        $request->validate([
            'nip'   => 'required',
            'pass'  => 'required'
        ]);

        $data = [
            'nip'       => $request->nip,
            'password'  => $request->pass
        ];

        if (Auth::guard('dosen')->attempt($data)) {
            session(['nip' => $request->nip]);
            return redirect()->route('homedos');
        }else{
            return redirect()->back()->with('failed', 'nip atau password salah');
        }
    }

    public function logout(Request $request){
        $request->session()->flush(); 
        Auth::logout();
        return redirect()->route('home');
    }
}
