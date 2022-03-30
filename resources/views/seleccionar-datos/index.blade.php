@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Seleccionar datos</h3>
            </div>
            {{-- <div class="col text-right">
                <a href="{{ url('municipio/create') }}" class="btn btn-sm btn-success">Importar nuevos datos</a>
            </div> --}}
        </div>
    </div>
    
    <div class="container">
        <div class="table-responsive">
            <!-- Para mostrar la notification de agregado correctamente -->
            <!-- Decimos que si tenemos una variable de sesion llamada notification vamos a mostrar su valor dentro del alert  -->
            <div class="card-body">
                @if (session('notification'))
                <div class="alert alert-success" role="alert">
                    {{ session('notification') }}
                </div>
                @endif
            </div>
            <select class="form-select" aria-label="Default select example" id="estado_select" name="estado_select">
                        <option disabled selected>Selecciona un estado</option>
                        @foreach ($estados as $estado)
                        {{-- <option value="{{$estado->id_estado}}">{{$estado->nombre_Estado.' - '.$estado->clave_Estado}}</option> --}}
                        <option value="{{$estado->clave_Estado}}">{{$estado->nombre_Estado.' - '.$estado->clave_Estado}}</option>
                        @endforeach
            </select>
            <select name="municipio" id="municipio_select" disabled>
                <option disabled selected>Selecciona un municipio</option>
            </select>
            <select name="localidad" id="localidad_select" disabled>
                <option disabled selected>Selecciona una localidad</option>
            </select>
            <hr>
            <div class="mb-3">
                <span class="" id="basic-addon1">Codigo postal</span>
                <input type="text" class="" placeholder="Codigo Postal" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        
        </div>
    </div>
</div>
@endsection
