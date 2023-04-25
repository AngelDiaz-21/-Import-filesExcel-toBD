@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Formas de pago</h3>
            </div>
            <div class="col text-right">
                <a href="{{ route('formaPago-create') }}" class="btn btn-sm btn-success pt-2 pb-2">Importar nuevos datos</a>
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
                    <th class="col-1 break-word" scope="col">Clave forma de pago</th>
                    <th class="col-1" scope="col">Descripción</th>
                    <th class="col-1" scope="col">Bancarizado</th>
                    <th class="col-1" scope="col">N. Operación </th>
                    <th class="col-1 break-word" scope="col">RFC del emisor cuenta ordenante</th>
                    <th class="col-1 break-word" scope="col">Cuenta ordenante</th>
                    <th class="col-1 break-word" scope="col">Patrón cuenta ordenante</th>
                    <th class="col-1 break-word" scope="col">RFC del emisor cuenta beneficiario</th>
                    <th class="col-1 break-word" scope="col">Cuenta beneficiario</th>
                    <th class="col-1 break-word" scope="col">Patrón cuenta beneficiaria</th>
                    <th class="col-1 break-word" scope="col">Tipo cadena pago</th>
                    <th class="col-1 break-word" scope="col">Nombre del banco emisor..</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formasPago as $formaP)
                <tr class="d-flex">
                    <th class="col-1" scope="row">{{ $formaP->id_formaPago }}</th>
                    <th class="col-1" scope="row">{{ $formaP->clave_formaPago }}</th>
                    <th class="col-1 break-word" scope="row">{{ $formaP->descripcion }}</th>
                    <th class="col-1" scope="row">{{ $formaP->bancarizado }}</th>
                    <th class="col-1" scope="row">{{ $formaP->n_Operacion }}</th>
                    <th class="col-1" scope="row">{{ $formaP->RFC_emisor_cuentaOrdenante }}</th>
                    <th class="col-1" scope="row">{{ $formaP->cuentaOrdenante }}</th>
                    <th class="col-1 break-word" scope="row">{{ $formaP->patron_cuentaOrdenante }}</th>
                    <th class="col-1" scope="row">{{ $formaP->RFC_emisor_cuentaBeneficiario }}</th>
                    <th class="col-1" scope="row">{{ $formaP->cuentaBeneficiario }}</th>
                    <th class="col-1 break-word" scope="row">{{ $formaP->patron_cuentaBeneficiario }}</th>
                    <th class="col-1" scope="row">{{ $formaP->tipo_cadenaPago }}</th>
                    <th class="col-1 break-word text-justify" scope="row">{{ $formaP->nombre_bancoEmisor_cuentaOrdenante_casoExtranjero }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
