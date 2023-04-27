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
    <!-- Para mostrar la notification de agregado correctamente -->
    <!-- Decimos que si tenemos una variable de sesion llamada notification vamos a mostrar su valor dentro del alert  -->
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif
    

        <form action="#" method="post">
            @csrf
            <div class="form-group">
                <label for="estado_select">Selecciona un estado</label>  <br>
                <select class="form-select" aria-label="Default select example" id="estado_select" name="estado_select">
                    <option disabled selected>Selecciona un estado</option>
                    @foreach ($estados as $estado)
                    <option value="{{$estado->clave_Estado}}">{{$estado->nombre_Estado.' - '.$estado->clave_Estado}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="estado_select">Selecciona un municipio</label> <br>
                <select name="municipio" id="municipio_select" disabled>
                    <option disabled selected>Selecciona un municipio</option>
                </select>
            </div>

            <div class="form-group">
                <label for="estado_select">Selecciona un localidad</label> <br>
                <select name="localidad" id="localidad_select" disabled>
                    <option disabled selected>Selecciona una localidad</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="codigoPostal">Codigo postal</label>
                <input type="text" class="form-control" id="inputCodigoPostal" onkeyup="countCodigoPostal(this);" name="codigoPostal" placeholder="Codigo Postal">
            </div>

            <div class="form-group">
                <select name="colonia" id="colonia_select" >
                    <option disabled selected>Selecciona una colonia</option>
                </select>
            </div>
        </form>
    </div>
</div>
@endsection
