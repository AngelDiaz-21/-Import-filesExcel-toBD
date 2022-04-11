@extends('layouts.panel')

@section('content')


<div class="card shadow">
    <div class="card-header border-0">
        <h1 class="text-center pb-12 text-2xl fw-bold">
            Newsletter
        </h1>

        <form action="/subscribe" method="POST" enctype="multipart/form-data">
            @csrf

            <input type="text" name="email" class="px-4 py-2 shadow-sm rounded-sm placeholder-gray-50::placeholder">

            <button class="bg-blue hover:bg-blue-700 text-white font-bold py-2 px-4 ml-4 rounded-full" type="submit">
                Submit
            </button>

        </form>

    </div>
</div>
@endsection
