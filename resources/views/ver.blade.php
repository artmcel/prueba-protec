@extends('layouts.app')

@section('content')

<div class="container">
    <h2>listado de entradas</h2>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Fecha de Publicación</th>
                    <th scope="col">Contenido</th>
                </tr>
            </thead>
            <tbody>
                @foreach($entradas as $entrada)
                <tr class="">
                    <td scope="row">{{$entrada->titulo}}</td>
                    <td>{{$entrada->autor}}</td>
                    <td>{{$entrada->fecha_publicacion}}</td>
                    <td>{{$entrada->contenido}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
