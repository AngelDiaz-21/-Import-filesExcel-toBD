@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Médicos</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('states/create') }}" class="btn btn-sm btn-success">Importar nuevos datos</a>
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
                    <th scope="col">Clave del estado</th>
                    <th scope="col">Nombre del estado</th>
                    {{-- <th scope="col">E-mail</th>
                    <th scope="col">DNI</th>
                    <th scope="col">Opciones</th> --}}
                </tr>
            </thead>
            <tbody>
                <!-- Aqui vamos a iterar. Para cada una de las especialidades (doctors) las vamos a tratar como doctor  -->
                @foreach ($states as $state)
                <tr>
                    <th scope="row">{{ $state->id_state }}</th>
                    <th scope="row">{{ $state->c_State }}</th>
                    <th scope="row">{{ $state->name_State }}</th>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
