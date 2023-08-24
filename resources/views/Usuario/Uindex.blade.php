@extends('Plantilla.plantilla')

@section('titulo','index')

@section('contenido')
    @if(session('mensaje'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <strong>Comfirmacion!</strong> {{session('mensaje')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1><center>Tabla De Usuarios </center></h1>

    <a class="btn btn-primary" href="{{route('usuario.crear')}}">Crear</a>
    <br>
    <br>
    <table class="table  table-striped" class="pagination">

        <thead class="table-light">
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Correo Electronico</th>
        <th scope="col">Telefono</th>
        <th scope="col">Direccion</th>


        </thead>
        <tbody>
        @forelse($usuarios as $usuario)
            <tr>
                <td class="table-danger"><a href= "{{route('usuario.show', ['id'=>$usuario->id])}}" >{{$usuario->id}}</a></td>
                <td class="table-success">{{$usuario->nombre}}</td>
                <td class="table-danger">{{$usuario->correo_electronico}}</td>
                <td class="table-success">{{$usuario->telefono}}</td>
                <td class="table-danger">{{$usuario->direccion}}</td>
                <td><a href= "{{route('usuario.editar', ['id'=>$usuario->id])}}" >Editar</a></td>

                <td>
                    <form  method="post" action="{{route('usuario.borrar', [$usuario->id])}}">
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

    {{ $usuarios->render('pagination::bootstrap-4') }}

@endsection()
