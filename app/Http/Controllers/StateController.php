<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\State;

class StateController extends Controller
{
    //

    public function index()
    {
        //Estamos haciendo uso del modelo User que se enecuntra en Models
        $states = State::all();
        return view('states.index', compact('states'));
    }

    public function create(){
        return view ('states.import-state');
    }




}
