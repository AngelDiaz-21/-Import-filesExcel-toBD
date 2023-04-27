@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido ') }}<i class="fas fa-user"></i> 
                    <p class="text-justify mt-3">Esta aplicación permite importar datos de archivos excel o con terminación .xlsx</p>
                    <p class="text-justify">Esta aplicación permite importar de momento 11 catalogos del SAT como son los estados, colonias, claves de productos y servicios, regímenes fiscales, etc.</p>
                    <p class="text-justify">Así mismo para hacer la importación se debe de tener la base de datos en donde se almacenarán estos registro.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
