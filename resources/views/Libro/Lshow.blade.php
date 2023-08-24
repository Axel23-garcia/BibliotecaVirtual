@extends('Plantilla.plantilla')

@section('titulo','show')

@section('contenido')

<h1><center>Mostrar Datos De Los Libros Individuales </center></h1>

<br>
<table class="table">
    <thead class="thead-light">
    <tr>
        <th scope="col">Campo</th>
        <th scope="col">Valor</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">Titulo</th>
        <td>{{ $libro->titulo}}</td>
    </tr>

    <tr>
        <th scope="row">Autor</th>
        <td>{{ $libro->autor}}</td>
    </tr>
    <tr>
        <th scope="row">Editorial</th>
        <td>{{ $libro->editorial}}</td>
    </tr>

    <tr>
        <th scope="row">Año Publicacion</th>
        <td>{{ $libro->anio_publicacion}}</td>
    </tr>

    <tr>
        <th scope="row">Cantidad Disponible</th>
        <td>{{ $libro->cantidad_disponible}}</td>
    </tr>
    </tbody>
</table>
<br>
<a class="btn btn-primary" href="{{route('libro.index')}}">Volver</a>

@endsection
