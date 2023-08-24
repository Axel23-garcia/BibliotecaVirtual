@extends('Plantilla.plantilla')

@section('titulo','create')

@section('contenido')

<h1>Formulario De Libro</h1>

<br>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="{{route('libros.crear')}}">
    @csrf
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Nombre del titulo">
    </div>

    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor del libro">
    </div>

    <div class="form-group">
        <label for="editorial">Editorial</label>
        <input type="text" class="form-control" name="editorial" id="editorial" placeholder="Editorial del libro">
    </div>

    <div class="form-group">
        <label for="anio_publicacion">Año Publicacion</label>
        <input type="number" class="form-control" name="anio_publicacion" id="anio_publicacion" placeholder="1997-2023">
    </div>

    <div class="form-group">
        <label for="cantidad_disponible">Cantidad Disponible</label>
        <input type="number" class="form-control" name="cantidad_disponible" id="cantidad_disponible" placeholder="0-100">
    </div>
    <br>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-success" href="{{route('libro.index')}}">Cancelar</a>
    </div>
</form>

@endsection()
