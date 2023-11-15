@extends('layouts.app')

@section('content')

{{ $resultado = ''}}

<div class="container">
    <h2>Listado de entradas</h2>

    <form class="d-flex" method="POST" action="{{ url('/buscar') }}">
        {{ csrf_field() }}
        <input class="form-control me-2" name="buscar" id="buscar" type="search" placeholder="Buscar entrada" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
        <br>
    </form>
    @error('buscar')
        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror

    <div class="row">
        @if ( session('resultado'))
        <div class="alert alert-warning col-md-10 offset-md-1 text-center mt-3">
            <p>Sin resultados</p>
        </div>
        @endif
        @foreach($entradas as $entrada)
        <div class="col m-2">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h4 class="card-title">{{$entrada->titulo}}</h4>
                <h6 class="card-subtitle text-muted">{{$entrada->autor}}</h6>
                <p class="card-text">{{$entrada->contenido}}</p>
                <a href="{{url('entrada/'.$entrada->id.'')}}" class="btn btn-primary">Ver mas...</a>
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
