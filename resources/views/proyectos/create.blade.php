@extends('layout.app')


@section('title')
    <p class="d-flex justify-content-center mt-5">
        Agregar nuevo proyecto
    </p>
    <hr>
@endsection

@section('content')

    <form action="{{ route('storeProyectos')}}" method="POST" enctype="multipart/form-data">
        @method('post')
        @csrf
        @include('proyectos.formulario')
    </form>
@endsection

