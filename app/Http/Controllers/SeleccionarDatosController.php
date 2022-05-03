<?php

namespace App\Http\Controllers;

use App\Models\Estado;

use App\Models\Colonias;
use App\Models\Localidad;
use App\Models\Municipio;
use Illuminate\Http\Request;


class SeleccionarDatosController extends Controller
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
        $estados = Estado::all();
        return view ('seleccionar-datos.index', compact('estados'));
    }

    // Recibe un objeto request
    public function municipios(Request $request){
        // Preguntamos si existe una variable requeste texto vamos almacenar
        if(isset($request->texto)){
            // Si existe hacemos una consulta a la tabla municipio y almacenamos todos los registros que coincidan con el criterio o con ese id
            // Entramos a municipios y vamos a traer todo lo que coincida con clave_Estado, lo tenemos en request y lo almacenamos en texto y que nos traiga todas
            // $municipios = Municipio::wherec_Estado($request->texto)->get();
            $municipio = Municipio::where('c_Estado', $request->texto)->get();
            // Retornamos la consulta mediante un objeto response y que se transforme en json
            return response()->json(
                // Recibe un array y tenemos que parsearlo o armarlo
                [
                // Aqui van todos los municipios
                'lista' => $municipio,
                // Enviamos una bandera si esta todo bien
                'success' => true
                ]
            );
        }else{
            return response()->json(
                // Recibe un array y tenemos que parsearlo o armarlo
                [
                // Enviamos una bandera si esta todo mal
                'success' => false
                ]
            );
        }
    }

    public function localidad(Request $request){
        if(isset($request->texto)){
            // $localidades = Localidad::wherec_Estado($request->texto)->get();
            $localidades = Localidad::where('c_Estado', $request->texto)->get();
            return response()->json(
                [
                'lista' => $localidades,
                'success' => true
                ]
            );
        }else{
            return response()->json(
                [
                'success' => false
                ]
            );
        }
    }

    public function colonias(Request $request){
        if(isset($request->texto)){
            // $localidades = Localidad::wherec_Estado($request->texto)->get();
            $colonias = Colonias::where('clave_CodigoPostal', $request->texto)->get();
            return response()->json(
                [
                'lista' => $colonias,
                'success' => true
                ]
            );
        }else{
            return response()->json(
                [
                'success' => false
                ]
            );
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
