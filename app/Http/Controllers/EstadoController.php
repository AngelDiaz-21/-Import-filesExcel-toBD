<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\EstadoImport;
use App\Models\Estado;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;



class EstadoController extends Controller
{
    //

    public function index()
    {
        //Estamos haciendo uso del modelo User que se enecuntra en Models
        $estados = Estado::all();
        return view('estado.index', compact('estados'));
    }

    public function create(){
        return view ('estado.import-estado');
    }

    public function store(Request $request){
        // Definimos una variable file que va a contener el request y el nombre del input con el que importaremos el archivo
        $file = $request -> file('import_file');

        // Importamos el archivo
        // El StatesImport es el nombre del archivo donde definimos las columnas
        // Colocamos la variable en donde se almacena el archivo
        Excel::import(new EstadoImport, $file);

        // Redirigimos al index

        return redirect()->route('estado.index')->with('sucess', 'Estados importados exitosamente');

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
