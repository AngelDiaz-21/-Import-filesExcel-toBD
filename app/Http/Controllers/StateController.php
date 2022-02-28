<?php

namespace App\Http\Controllers;

use App\Imports\StatesImport;
use App\Models\State;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;



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

    public function store(Request $request){
        // Definimos una variable file que va a contener el request y el nombre del input con el que importaremos el archivo
        $file = $request -> file('import_file');

        // Importamos el archivo
        // El StatesImport es el nombre del archivo donde definimos las columnas
        // Colocamos la variable en donde se almacena el archivo
        Excel::import(new StatesImport, $file);

        // Redirigimos al index

        return redirect()->route('states.index')->with('sucess', 'Estados importados exitosamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
