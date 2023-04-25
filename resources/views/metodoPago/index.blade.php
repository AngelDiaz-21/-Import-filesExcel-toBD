@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Métodos de pago</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('metodoPago-create') }}" class="btn btn-sm btn-success pt-2 pb-2">Importar nuevos datos</a>
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
                    <th scope="col">Clave método de pago</th>
                    <th scope="col">Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($metodosPagos as $metodoPago)
                <tr>
                    <th scope="row">{{ $metodoPago->id_metodoPago }}</th>
                    <th scope="row">{{ $metodoPago->clave_metodoPago }}</th>
                    <th scope="row">{{ $metodoPago->descripcion }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
