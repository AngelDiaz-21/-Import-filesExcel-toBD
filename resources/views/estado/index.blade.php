@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Estados de la república</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('estado/create') }}" class="btn btn-sm btn-success">Importar nuevos datos</a>
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
                    <th scope="col">Clave del pais</th>
                    <th scope="col">Nombre del estado</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aqui vamos a iterar. Para cada una de las especialidades (doctors) las vamos a tratar como doctor  -->
                @foreach ($estados as $estado)
                <tr>
                    <th scope="row">{{ $estado->id_estado }}</th>
                    <th scope="row">{{ $estado->clave_Estado }}</th>
                    <th scope="row">{{ $estado->c_Pais }}</th>
                    <th scope="row">{{ $estado->nombre_Estado }}</th>
                </tr>
                @endforeach
                {{-- <select class="form-select" aria-label="Default select example">
                    <option selected>Open this select menu</option>
                    @foreach ($states as $state)
                    <option value="{{$state->id_state}}">{{$state->name_State.' - '.$state->c_State}}</option>
                    @endforeach
                </select> --}}
            </tbody>
        </table>
    </div>
</div>
@endsection
