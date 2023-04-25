@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Regímenes fiscales</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('regimenFiscal-create') }}" class="btn btn-sm btn-success pt-2 pb-2">Importar nuevos datos</a>
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
                    <th class="col-2 break-word" scope="col">Clave regimén fiscal</th>
                    <th class="col-5" scope="col">Descripción</th>
                    <th class="col-2 break-word" scope="col">Tipo de persona fisica</th>
                    <th class="col-2 break-word" scope="col">Tipo de persona moral</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regimenFiscal as $regimenF)
                <tr class="d-flex">
                    <th class="col-1" scope="row">{{ $regimenF->id_regimenFiscal }}</th>
                    <th class="col-2" scope="row">{{ $regimenF->clave_regimenFiscal }}</th>
                    <th class="col-5 break-word text-justify" scope="row">{{ $regimenF->descripcion }}</th>
                    <th class="col-2" scope="row">{{ $regimenF->tipo_personaFisica }}</th>
                    <th class="col-2" scope="row">{{ $regimenF->tipo_personaMoral }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
