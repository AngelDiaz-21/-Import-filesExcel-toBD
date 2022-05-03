<?php

namespace App\Http\Controllers;

use App\Models\Emisor;
use Illuminate\Http\Request;
use App\Models\RegimenFiscal;
use Illuminate\Support\Facades\DB;

class EmisorController extends Controller
{

    public function regimenFiscales(Request $request){
        if(isset($request->texto)){
            if($request->texto == 0){
                $regimenFiscal = RegimenFiscal::where('tipo_personaFisica', 'No')
                                                ->orWhere('tipo_personaMoral', 'Si')
                                                ->get();

                return response()->json(
                    [
                    'lista' => $regimenFiscal,
                    'success' => true
                    ]
                );
            }else if($request->texto == 1){
                $regimenFiscal = RegimenFiscal::where('tipo_personaFisica', 'Si')
                                                ->orWhere('tipo_personaMoral', 'No')
                                                ->get();
                return response()->json(
                    [
                    'lista' => $regimenFiscal,
                    'success' => true
                    ]
                );
            }
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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emisores= Emisor::all();
        return view ('emisor.index', compact('emisores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emisor.create');
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
        Emisor::create(
            $request->only('razon_Social', 'rfc', 'tipo_Persona', 'regimenFiscal_clave') );

        $notification = 'El emisor se ha registrado correctamente.';
        return redirect('/emisor')->with(compact('notification'));
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
    public function edit(Request $request, $id_emisor)
    {
        $resultado = RegimenFiscal::join("facturacion.emisor", "emisor.regimenFiscal_clave", "=", "regimenfiscal.clave_regimenFiscal")
        ->select("regimenfiscal.clave_regimenFiscal", "regimenfiscal.descripcion")
        ->where("emisor.id_emisor", "=", $id_emisor)
        ->first();

        $emisor = Emisor::where('id_emisor', $id_emisor)->first();
        return view('emisor.edit', compact('emisor', 'resultado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $emisorUpdate = Emisor::find($request->id_emisor);

        $emisorUpdate->razon_Social = $request->razon_Social;
        $emisorUpdate->rfc = $request->rfc;
        $emisorUpdate->tipo_Persona = $request->tipo_Persona;
        $emisorUpdate->regimenFiscal_clave = $request->regimenFiscal_clave;
        $emisorUpdate->save();

        $notification = 'Los datos del emisor se han actualizado correctamente.';
        return redirect('emisor')->with(compact('notification'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emisor $id_emisor)
    {
        $deleteRazonSocial = $id_emisor->razon_Social;

        $id_emisor->delete();

        $notification = 'El emisor: '. $deleteRazonSocial .', se ha eliminado correctamente.';
        return redirect('/emisor')->with(compact('notification'));
    }
}
