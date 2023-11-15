@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h1 class="text-center">Bienvenido al Blog</h1>
        <div class="col">
            <a class="btn btn-primary" href="{{ url('crear-entradas') }}">
                {{ __('Crear entrada') }}
            </a>
        </div>
        <div class="col">
            <a class="btn btn-success" href="{{ url('ver-entradas') }}">
                {{ __('Ver entradas') }}
            </a>
        </div>
    </div>
</div>
@endsection
