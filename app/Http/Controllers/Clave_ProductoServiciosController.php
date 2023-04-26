<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claves_ProductoServicios;
use App\Imports\Claves_ProductoServiciosImport;
use Yajra\DataTables\DataTables;
use Maatwebsite\Excel\Facades\Excel;

class Clave_ProductoServiciosController extends Controller
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
        $clave_prodServ = Claves_ProductoServicios::paginate(20);
        return view('clavesProductosServicios.index', compact('clave_prodServ'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clavesProductosServicios.import-claveProductoServicio');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('import_file');
        Excel::import(new Claves_ProductoServiciosImport, $file);
        return redirect()->route('CPS')->with('sucess', 'Datos de claves productos y servicios importados exitosamente');
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
