@extends('Plantilla.plantilla')

@section('titulo','index')

@section('contenido')

    @if(session('mensaje'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <strong>Comfirmacion!</strong> {{session('mensaje')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1><center>Tabla De Prestamos </center></h1>

    <a class="btn btn-primary" href="{{route('prestamo.crear')}}">Crear</a>
    <br>
    <br>
    <table class="table  table-striped" class="pagination">

        <thead class="table-light">
        <th scope="col">Id</th>
        <th scope="col">Fecha Solicitud</th>
        <th scope="col">Fecha Prestamo</th>
        <th scope="col">Fecha Devolucion</th>
        <th scope="col">Libro ID</th>
        <th scope="col">Usuario ID</th>



        </thead>
        <tbody>
        @forelse($prestamos as $prestamo)
            <tr>
                <td class="table-danger"><a href= "{{route('prestamo.show', ['id'=>$prestamo->id])}}" >{{$prestamo->id}}</a></td>
                <td class="table-success">{{$prestamo->fecha_solicitud}}</td>
                <td class="table-danger">{{$prestamo->fecha_prestamo}}</td>
                <td class="table-success">{{$prestamo->fecha_devolucion}}</td>
                <td class="table-danger">{{$prestamo->libro_id}}</td>
                <td class="table-success">{{$prestamo->usuario_id}}</td>
                <td><a href= "{{route('prestamo.editar', ['id'=>$prestamo->id])}}" >Editar</a></td>

                <td>
                    <form  method="post" action="{{route('prestamo.borrar', [$prestamo->id])}}">
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

    {{ $prestamos->render('pagination::bootstrap-4') }}

@endsection()
