@extends('layouts.panel')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-card">
                <div class="card-header">Importar datos de colonias</div>
                <div class="card-body">
                    @if (isset($errors) && $errors->any())
                    <div class="alert alert-danger" role="alert">
                        @foreach ($errors->all() as $error)
                        {{$error}}
                        @endforeach
                    </div>
                    @endif
                    <form action="{{route('colonia-store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input class="d-block mb-3 form-control" type="file" name="import_file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" id="fileInput"/>
                        <div class="d-flex justify-content-end">
                            <button disabled="disabled" class="btn btn-primary" type="submit">Importar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection