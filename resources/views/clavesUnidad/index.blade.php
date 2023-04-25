@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Claves de unidad</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('claveUnidad-create') }}" class="btn btn-sm btn-success pt-2 pb-2">Importar nuevos datos</a>
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
                    <th class="col-1 break-word" scope="col">Clave de unidad</th>
                    <th class="col-3 break-word" scope="col">Nombre de unidad</th>
                    <th class="col-2 break-word" scope="col">Descripción</th>
                    <th class="col-3 break-word" scope="col">Nota</th>
                    <th class="col-2 break-word" scope="col">Simbolo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clavesUnidad as $claveUni)
                <tr class="d-flex">
                    <th class="col-1" scope="row">{{ $claveUni->id_claveUnidad }}</th>
                    <th class="col-1" scope="row">{{ $claveUni->clave_Unidad }}</th>
                    <th class="col-3 break-word text-justify" scope="row">{{ $claveUni->nombreUnidad }}</th>
                    <th class="col-2 break-word text-justify" scope="row">{{ $claveUni->descripcion }}</th>
                    <th class="col-3 break-word text-justify" scope="row">{{ $claveUni->nota }}</th>
                    <th class="col-2 break-word" scope="row">{{ $claveUni->simbolo }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $clavesUnidad->links() }}
        </div>
    </div>
</div>
@endsection
