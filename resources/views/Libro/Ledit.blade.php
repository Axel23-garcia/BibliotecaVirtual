@extends('Plantilla.plantilla')

@section('titulo','edit')

@section('contenido')

<h1>Editar Informacion De Los Libros</h1>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="post" action="{{route('libro.update', [$libros->id])}}" class="needs-validation">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Nombre del titulo" value = "{{old('titulo') ?? $libros->titulo}}">
    </div>

    <div class="form-group">
        <label for="autor">Autor</label>
        <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor del libro" value = "{{old('autor') ?? $libros->autor}}">
    </div>

    <div class="form-group">
        <label for="editorial">Editorial</label>
        <input type="text" class="form-control" name="editorial" id="editorial" placeholder="Editorial del libro" value="{{old('editorial') ?? $libros->editorial}}">
    </div>

    <div class="form-group">
        <label for="anio_publicacion">Año Publicacion</label>
        <input type="number" class="form-control" name="anio_publicacion" id="anio_publicacion" placeholder="1997-2023" value="{{old('anio_publicacion') ?? $libros->anio_publicacion}}">
    </div>

    <div class="form-group">
        <label for="cantidad_disponible">Cantidad Disponible</label>
        <input type="number" class="form-control" name="cantidad_disponible" id="cantidad_disponible" placeholder="0-100" value = "{{old('cantidad_disponible') ?? $libros->cantidad_disponible}}">
    </div>
    <br>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-success" href="{{route('libro.index')}}">Cancelar</a>
    </div>
</form>

@endsection()
