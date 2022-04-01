@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Claves de productos y servicios</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('claves_productosServicios/create') }}" class="btn btn-sm btn-success">Importar nuevos datos</a>
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
        {{-- Para mostrar la notification de agregado correctamente --}}
        {{-- Decimos que si tenemos una variable de sesion llamada notification vamos a mostrar su valor dentro del alert   --}}
        <div class="card-body">
            @if (session('notification'))
            <div class="alert alert-success" role="alert">
                {{ session('notification') }}
            </div>
            @endif
        </div>
        <!-- specialities table -->
        <table class="table align-items-center table-flush">
            <thead class="thead-light align-items-center">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Clave de productos y servicios</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Incluir IVA trasladado</th>
                    <th scope="col">Incluir IEPS trasladado</th>
                    <th scope="col">Estimulo franja fronteriza </th>
                    <th scope="col">Palabras similares</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clave_prodServ as $productoServicio)
                <tr>
                    <th scope="row">{{ $productoServicio->id_productoServicio }}</th>
                    <th scope="row">{{ $productoServicio->clave_productoServicio }}</th>
                    <th scope="row">{{ $productoServicio->descripcion }}</th>
                    <th scope="row">{{ $productoServicio->incluir_IVA_trasladado }}</th>
                    <th scope="row">{{ $productoServicio->incluir_IEPS_trasladado }}</th>
                    <th scope="row">{{ $productoServicio->estimulo_franjaFronteriza }}</th>
                    <th scope="row">{{ $productoServicio->palabras_Similares }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
