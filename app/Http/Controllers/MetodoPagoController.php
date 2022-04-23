<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;

// use App\Http\Requests;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Imports\MetodoPagoImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Events\NewImportMetodoPagoEvent;

class MetodoPagoController extends Controller
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
        $metodosPagos = MetodoPago::all();
        return view('metodoPago.index', compact('metodosPagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('metodoPago.import-metodoPago');
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

        Excel::import(new MetodoPagoImport, $file);
        // $importar = Excel::import(new MetodoPagoImport, $file);

        // event(new NewImportMetodoPagoEvent ($importar));
        return redirect()->route('metodoPago.index')->with('sucess', 'Métodos de pagos importados exitosamente');
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
