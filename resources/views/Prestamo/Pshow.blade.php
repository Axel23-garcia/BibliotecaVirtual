@extends('Plantilla.plantilla')

@section('titulo','show')

@section('contenido')

    <h1><center>Mostrar Datos De Los Prestamos </center></h1>

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
            <th scope="row">Fecha Solicitud</th>
            <td>{{ $prestamo->fecha_solicitud}}</td>
        </tr>

        <tr>
            <th scope="row">Fecha Prestamo</th>
            <td>{{ $prestamo->fecha_prestamo}}</td>
        </tr>
        <tr>
            <th scope="row">Fecha Devolucion</th>
            <td>{{ $prestamo->fecha_devolucion}}</td>
        </tr>

        <tr>
            <th scope="row">Libro ID</th>
            <td>{{ $prestamo->libro_id}}</td>
        </tr>

        <tr>
            <th scope="row">Usuario ID</th>
            <td>{{ $prestamo->usuario_id}}</td>
        </tr>
        </tbody>
    </table>
    <br>
    <a class="btn btn-primary" href="{{route('prestamo.index')}}">Volver</a>

@endsection
