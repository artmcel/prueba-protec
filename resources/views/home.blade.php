@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="text-center">Bienvenido al Blog</h1>
        <p class="text-center">Selecciona una opción</p>
        <div class="col text-center">
            <a class="btn btn-primary" href="{{ url('crear-entradas') }}">
                {{ __('Crear entrada') }}
            </a>
        </div>
        <div class="col text-center">
            <a class="btn btn-success" href="{{ url('ver-entradas') }}">
                {{ __('Ver entradas') }}
            </a>
        </div>
    </div>
</div>
@endsection
