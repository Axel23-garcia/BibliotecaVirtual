@extends('Plantilla.plantilla')

@section('titulo','show')

@section('contenido')

    <h1><center>Mostrar Datos De Los Usuarios </center></h1>

    <br>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">Campo</th>
            <th scope="col">Valor</th>
        </thead>
        </tr>
        <tbody>
        <tr>
            <th scope="row">Nombre</th>
            <td>{{ $usuario->nombre}}</td>
        </tr>

        <tr>
            <th scope="row">Correo Electronico</th>
            <td>{{ $usuario->correo_electronico}}</td>
        </tr>
        <tr>
            <th scope="row">Telefono</th>
            <td>{{ $usuario->telefono}}</td>
        </tr>

        <tr>
            <th scope="row">Direccion</th>
            <td>{{ $usuario->direccion}}</td>
        </tr>


        </tbody>
    </table>
    <br>
    <a class="btn btn-primary" href="{{route('usuario.index')}}">Volver</a>

@endsection
