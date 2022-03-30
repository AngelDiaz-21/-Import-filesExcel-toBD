@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Regimén fiscal</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('metodoPago/create') }}" class="btn btn-sm btn-success">Importar nuevos datos</a>
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
                    <th scope="col">Clave regimén fiscal</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Tipo de persona fisica</th>
                    <th scope="col">Tipo de persona moral</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aqui vamos a iterar. Para cada una de las especialidades (doctors) las vamos a tratar como doctor  -->
                {{-- @foreach ($metodosPagos as $metodoPago)
                <tr>
                    <th scope="row">{{ $metodoPago->id_metodoPago }}</th>
                    <th scope="row">{{ $metodoPago->clave_metodoPago }}</th>
                    <th scope="row">{{ $metodoPago->descripcion }}</th>
                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
</div>
@endsection
