@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Localidades de la república</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('localidad-create') }}" class="btn btn-sm btn-success pt-2 pb-2">Importar nuevos datos</a>
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
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Clave de la localidad</th>
                    <th scope="col">Clave del estado</th>
                    <th scope="col">Nombre de la localidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($localidades as $localidad)
                <tr>
                    <th scope="row">{{ $localidad->id_localidad }}</th>
                    <th scope="row">{{ $localidad->clave_Localidad }}</th>
                    <th scope="row">{{ $localidad->c_Estado }}</th>
                    <th scope="row">{{ $localidad->nombre_Localidad }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{$localidades->links()}}
        </div>
    </div>
</div>
@endsection
