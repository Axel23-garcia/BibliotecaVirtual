@extends('Plantilla.plantilla')

@section('titulo','index')

@section('contenido')

    @if(session('mensaje'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <strong>Comfirmacion!</strong> {{session('mensaje')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

        <h1><center>Tabla De Libros </center></h1>

<a class="btn btn-primary" href="{{route('libros.crear')}}">Crear</a>
<br>
<br>
<table class="table  table-striped" class="pagination">

    <thead class="table-light">
    <th scope="col">id</th>
    <th scope="col">Titulo</th>
    <th scope="col">Autor</th>
    <th scope="col">Editorial</th>
    <th scope="col">Año Publicacion</th>
    <th scope="col">Cantidad Disponible</th>



    </thead>
    <tbody>
    @forelse($libros as $libro)
    <tr>
        <td class="table-danger"><a href= "{{route('libro.show', ['id'=>$libro->id])}}" >{{$libro->id}}</a></td>
        <td class="table-success">{{$libro->titulo}}</td>
        <td class="table-danger">{{$libro->autor}}</td>
        <td class="table-success">{{$libro->editorial}}</td>
        <td class="table-danger">{{$libro->anio_publicacion}}</td>
        <td class="table-success">{{$libro->cantidad_disponible}}</td>
        <td><a href= "{{route('libro.editar', ['id'=>$libro->id])}}" >Editar</a></td>

        <td>
            <form  method="post" action="{{route('libro.borrar', [$libro->id])}}">
                @method("DELETE")
                @csrf
                <td><button type="submit" class="btn btn-primary" >Eliminar</button></td>
            </form>
        </td>


    </tr>
    @empty
    <tr>
        <td colspan="5">No hay libros</td>
    </tr>
    @endforelse

    </tbody>
</table>

{{ $libros->render('pagination::bootstrap-4') }}

@endsection()
