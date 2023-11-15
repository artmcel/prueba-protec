@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach($resultadoEntrada as $entrada)
        <div class="col-12 m-2">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-center">{{$entrada->titulo}}</h4>
                <h6 class="card-subtitle text-muted">{{$entrada->autor}}</h6>
                <p class="card-text">{{$entrada->contenido}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Fecha de Publicación: {{$entrada->fecha_publicacion}}</small>
            </div>
        </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

