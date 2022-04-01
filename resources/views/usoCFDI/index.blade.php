@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">CFDI</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('usoCFDI/create') }}" class="btn btn-sm btn-success">Importar nuevos datos</a>
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
                    <th scope="col">Clave CFDI</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Tipo de persona fisica</th>
                    <th scope="col">Tipo de persona moral</th>
                    <th scope="col">Regimén fiscal receptor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usoCFDI as $CFDI)
                <tr>
                    <th scope="row">{{ $CFDI->id_usoCFDI }}</th>
                    <th scope="row">{{ $CFDI->clave_usoCFDI }}</th>
                    <th scope="row">{{ $CFDI->descripcion }}</th>
                    <th scope="row">{{ $CFDI->tipo_personaFisica }}</th>
                    <th scope="row">{{ $CFDI->tipo_personaMoral }}</th>
                    <th scope="row">{{ $CFDI->regimen_fiscalReceptor }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
