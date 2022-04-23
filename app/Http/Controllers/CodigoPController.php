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
        // Esto significa que todas las rutas que este controlador resuelva van a exigir al usuario que haya iniciado sesión y si no lo esta lo mando a la vista de login
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $codigo_P = CodigoP::all();
        return view('codigoPostal.index', compact('codigo_P'));
        // return view('codigoP.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('codigoPostal.import-cp');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $file = $request -> file('import_file');

        // Importamos el archivo
        // El StatesImport es el nombre del archivo donde definimos las columnas
        // Colocamos la variable en donde se almacena el archivo
        Excel::import(new CodigoPostalImport, $file);

        // Redirigimos al index

        return redirect()->route('codigoPostal.index')->with('sucess', 'Estados importados exitosamente');

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
