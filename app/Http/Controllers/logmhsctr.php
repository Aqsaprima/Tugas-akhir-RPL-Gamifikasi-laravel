<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logmhsctr extends Controller
{
    public function index(){
        return view("login");
    }

    public function verifikasi(Request $request){
        $request->validate([
            'npm'   => 'required',
            'pass'  => 'required'
        ]);

        $data = [
            'npm'       => $request->npm,
            'password'  => $request->pass
        ];

        if(Auth::attempt($data)){
            session(['npm' => $request->npm]);
            return redirect()->route('peri');
        }else{
            return redirect()->route('logmhs')->with('failed', 'npm atau password salah');
        }
    }

    public function logout(Request $request){
        $request->session()->flush(); 
        Auth::logout();
        return redirect()->route('home');
    }
}
