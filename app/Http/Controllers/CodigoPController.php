<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\CodigoPostalImport;
use App\Models\CodigoP;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;

class CodigoPController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $codigo_P = CodigoP::paginate(20);
        return view("codigoPostal.index", compact("codigo_P"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('codigoPostal.import-cp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Definimos una variable file que va a contener el request y el nombre del input con el que importaremos el archivo
        $file = $request->file('import_file');
        // Importamos el archivo
        // El StatesImport es el nombre del archivo donde definimos las columnas
        // Colocamos la variable en donde se almacena el archivo
        Excel::import(new CodigoPostalImport, $file);
        return redirect()->route('codigosPostales')->with('sucess', 'Códigos postales importados exitosamente');
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
