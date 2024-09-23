<?php

namespace App\Http\Controllers;

use App\Models\Level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Laravel\Prompts\alert;

class sellevctr extends Controller
{
    public function index(){
        $data = Level::get();
        return view("selectLevel", compact('data'));
    }

    public function token(Request $request){
        $data = Level::find($request->id);
        if ($data->token == $request->token){
            session(['idsoal' => $data->id]);
            return redirect()->route('room');
        }else{
            return redirect()->route('selectLevel')->with('failed', 'token salah');
        }
    }
}
