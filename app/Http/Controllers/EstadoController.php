<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estado;
use App\Imports\EstadoImport;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\DataTables;

class EstadoController extends Controller
{
    //
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $estados = Estado::paginate(20);
        return view('estado.index', compact('estados'));
    }

    public function create(){
        return view('estado.import-estado');
    }

    public function store(Request $request){
        // $file = $request -> file('import_file');
        // Excel::import(new EstadoImport, $file);
        // return redirect()->route('estados')->with('sucess', 'Estados importados exitosamente');
        try {
            $file = $request->file('import_file');
            Excel::import(new EstadoImport, $file);
            return redirect()->route('estados')->with('sucess', 'Estados importados exitosamente');
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();

            foreach ($failures as $failure) {
                $failure->row(); // row that went wrong
                $failure->attribute(); // either heading key (if using heading row concern) or column index
                $failure->errors(); // Actual error messages from Laravel validator
                $failure->values(); // The values of the row that has failed.
            }
        }
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
