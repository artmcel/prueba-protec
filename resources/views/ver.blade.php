@extends('layouts.app')

@section('content')

<div class="container">
    <h2>listado de entradas</h2>

    <div class="row">
        @foreach($entradas as $entrada)
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h4 class="card-title">{{$entrada->titulo}}</h4>
                    <h6 class="card-subtitle text-muted">{{$entrada->autor}}</h6>
                    <p class="card-text">{{$entrada->contenido}}</p>
                    <a href="#" class="btn btn-primary">Ver mas...</a>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Fecha de Publicación: {{$entrada->fecha_publicacion}}</small>
                </div>
            </div>3
        </div>
        @endforeach
    </div>
</div>
@endsection
