<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UsuarioSubscritoEvent;

class NuevoBoletinController extends Controller
{
    //
    public function index(){
        return view('evento-listener.index');
    }

    public function subscribe(Request $request){
        // dd('OK');
        $request->validate([
            'email' => 'required|unique:newsletter,email'
        ]);

        event(new UsuarioSubscritoEvent($request->input('email')));

        return back();
    }

}
