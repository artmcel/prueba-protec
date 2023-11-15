@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Agrega una entrada</h2>
    <div class="row">
        <div class="col">
            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>
    </div>
    <div class="row justify-content-center align-items-center g-2">
        <div class="col-md">
            <form class="" method="POST" action="{{url('/guarda-entrada')}}">
                {{ csrf_field() }}
                <div class="mb-3">
                  <label for="titulo" class="form-label">Titulo</label>
                  <input type="text"
                    class="form-control" name="titulo" id="titulo" aria-describedby="helpId" placeholder="Agrega el titulo">
                    @error('titulo')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="autor" class="form-label">Autor</label>
                  <input type="text"
                    class="form-control" name="autor" id="autor" aria-describedby="helpId" placeholder="Agrega el Autor">
                    @error('autor')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="fecha_publicacion" class="form-label">Fecha de Publicación</label>
                  <input type="date"
                    class="form-control" name="fecha_publicacion" id="fecha_publicacion" aria-describedby="helpId" placeholder="Agrega la fecha de publicación">
                    @error('fecha_publicacion')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="contenido" class="form-label">Contenido</label>
                  <textarea class="form-control" name="contenido" id="contenido" rows="3"></textarea>
                  @error('contenido')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                  @enderror
                </div>
                <div class="mb-3 row">
                    <div class="mx-auto">
                        <button type="submit" class="btn btn-primary">Guardar entrada</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection