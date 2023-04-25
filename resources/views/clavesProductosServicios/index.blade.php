@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Claves de productos y servicios</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('clave_productoServicio-create') }}" class="btn btn-sm btn-success pt-2 pb-2">Importar nuevos datos</a>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <div class="card-body">
            @if (session('sucess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('sucess') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
        <table class="table align-items-center table-flush text-center">
            <thead class="thead-light align-items-center">
                <tr class="d-flex">
                    <th class="col-1" scope="col">ID</th>
                    <th class="col-2 break-word" scope="col">Clave de productos y servicios</th>
                    <th class="col-2" scope="col">Descripción</th>
                    <th class="col-2 break-word" scope="col">Incluir IVA trasladado</th>
                    <th class="col-2 break-word" scope="col">Incluir IEPS trasladado</th>
                    <th class="col-2 break-word" scope="col">Estimulo franja fronteriza </th>
                    <th class="col-3" scope="col">Palabras similares</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clave_prodServ as $productoServicio)
                <tr class="d-flex">
                    <th class="col-1" scope="row">{{ $productoServicio->id_productoServicio }}</th>
                    <th class="col-2" scope="row">{{ $productoServicio->clave_productoServicio }}</th>
                    <th class="col-2 break-word text-justify" scope="row">{{ $productoServicio->descripcion }}</th>
                    <th class="col-2" scope="row">{{ $productoServicio->incluir_IVA_trasladado }}</th>
                    <th class="col-2" scope="row">{{ $productoServicio->incluir_IEPS_trasladado }}</th>
                    <th class="col-2" scope="row">{{ $productoServicio->estimulo_franjaFronteriza }}</th>
                    <th class="col-3 break-word text-justify" scope="row">{{ $productoServicio->palabras_Similares }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $clave_prodServ->links() }}
        </div>
    </div>
</div>
@endsection
