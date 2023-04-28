@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Seleccionar datos</h3>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form action="#" method="post">
            @csrf
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="estado_select">Selecciona un estado</label>  <br>
                        <select class="form-select" aria-label="Default select example" id="estado_select" name="estado_select">
                            <option disabled selected>Selecciona un estado</option>
                            @foreach ($estados as $estado)
                            <option value="{{$estado->clave_Estado}}">{{$estado->nombre_Estado.' - '.$estado->clave_Estado}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="estado_select">Selecciona un municipio</label> <br>
                        <select name="municipio" id="municipio_select" disabled>
                            <option disabled selected>Selecciona un municipio</option>
                        </select>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="estado_select">Selecciona un localidad</label> <br>
                        <select name="localidad" id="localidad_select" disabled>
                            <option disabled selected>Selecciona una localidad</option>
                        </select>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                        <label for="codigoPostal">Codigo postal</label>
                        <input type="text" class="form-control" id="inputCodigoPostal" onkeyup="countCodigoPostal(this);" name="codigoPostal" placeholder="Codigo Postal" autocomplete="off">
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="form-group">
                        <select name="colonia" id="colonia_select" >
                            <option disabled selected>Selecciona una colonia</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
