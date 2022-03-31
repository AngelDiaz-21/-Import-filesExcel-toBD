@extends('layouts.panel')

@section('content')

<div class="card shadow">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0">Formas de pago</h3>
            </div>
            <div class="col text-right">
                <a href="{{ url('formaPago/create') }}" class="btn btn-sm btn-success">Importar nuevos datos</a>
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
                    <th scope="col">Clave forma de pago</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Bancarizado</th>
                    <th scope="col">N. Operación </th>
                    <th scope="col">RFC del emisor cuenta ordenante</th>
                    <th scope="col">Cuenta ordenante</th>
                    <th scope="col">Patrón cuenta ordenante</th>
                    <th scope="col">RFC del emisor cuenta beneficiario</th>
                    <th scope="col">Cuenta beneficiario</th>
                    <th scope="col">Patrón cuenta beneficiaria</th>
                    <th scope="col">Tipo cadena pago</th>
                    <th scope="col">Nombre del banco emisor..</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($formasPago as $formaP)
                <tr>
                    <th scope="row">{{ $formaP->id_formaPago }}</th>
                    <th scope="row">{{ $formaP->clave_formaPago }}</th>
                    <th scope="row">{{ $formaP->descripcion }}</th>
                    <th scope="row">{{ $formaP->bancarizado }}</th>
                    <th scope="row">{{ $formaP->n_Operacion }}</th>
                    <th scope="row">{{ $formaP->RFC_emisor_cuentaOrdenante }}</th>
                    <th scope="row">{{ $formaP->cuentaOrdenante }}</th>
                    <th scope="row">{{ $formaP->patron_cuentaOrdenante }}</th>
                    <th scope="row">{{ $formaP->RFC_emisor_cuentaBeneficiario }}</th>
                    <th scope="row">{{ $formaP->cuentaBeneficiario }}</th>
                    <th scope="row">{{ $formaP->patron_cuentaBeneficiario }}</th>
                    <th scope="row">{{ $formaP->tipo_cadenaPago }}</th>
                    <th scope="row">{{ $formaP->nombre_bancoEmisor_cuentaOrdenante_casoExtranjero }}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
