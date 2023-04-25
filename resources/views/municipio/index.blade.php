@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Municipios de la república</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('municipio-create') }}" class="btn btn-sm btn-success pt-2 pb-2">Importar nuevos datos</a>
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
                    <th scope="col">Clave del municipio</th>
                    <th scope="col">Clave del estado</th>
                    <th scope="col">Nombre del municipio</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($municipios as $municipio)
                <tr>
                    <th scope="row">{{ $municipio->id_municipio }}</th>
                    <th scope="row">{{ $municipio->clave_Municipio }}</th>
                    <th scope="row">{{ $municipio->c_Estado }}</th>
                    <th scope="row">{{ $municipio->nombre_Municipio }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $municipios->links() }}
        </div>
    </div>
</div>
@endsection
