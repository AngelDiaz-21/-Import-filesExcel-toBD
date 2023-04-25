@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">CFDI</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('usoCFDI-create') }}" class="btn btn-sm btn-success pt-2 pb-2">Importar nuevos datos</a>
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
                <tr class="d-flex">
                    <th class="col-1" scope="col">ID</th>
                    <th class="col-2 break-word" scope="col">Clave CFDI</th>
                    <th class="col-3" scope="col">Descripción</th>
                    <th class="col-2 break-word" scope="col">Tipo de persona fisica</th>
                    <th class="col-2 break-word" scope="col">Tipo de persona moral</th>
                    <th class="col-2 break-word" scope="col">Regimén fiscal receptor</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usoCFDI as $CFDI)
                <tr class="d-flex">
                    <th class="col-1" scope="row">{{ $CFDI->id_usoCFDI }}</th>
                    <th class="col-2" scope="row">{{ $CFDI->clave_usoCFDI }}</th>
                    <th class="col-3 break-word text-justify" scope="row">{{ $CFDI->descripcion }}</th>
                    <th class="col-2" scope="row">{{ $CFDI->tipo_personaFisica }}</th>
                    <th class="col-2" scope="row">{{ $CFDI->tipo_personaMoral }}</th>
                    <th class="col-2 break-word text-justify" scope="row">{{ $CFDI->regimen_fiscalReceptor }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
