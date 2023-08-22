@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','index') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Tabla de Libros </center></h1>
<button><center><a class="btn btn" href= ""><u>Crear</u></a></center></button>


<table class="table  table-hover" class="pagination">

    <thead class="table-light">
    <th scope="col">id</th>
    <th scope="col">Titulo</th>
    <th scope="col">Autor</th>
    <th scope="col">Editorial</th>
    <th scope="col">Año Publicacion</th>
    <th scope="col">Cantidad Disponible</th>



    </thead>
    <tbody>
    @forelse($libros as $libro) {{-- ESTA PARTE SIEMPRE VA--}}
    <tr>
        <td class="table-danger" ><a href="">{{$libro->id}}</td>
        <td class="table-danger">{{$libro->titulo}}</td> {{-- ESTOS SON LOS DATOS DE LA TABLA(MIGRACION) --}}
        <td class="table-danger">{{$libro->autor}}</td>
        <td class="table-danger">{{$libro->editorial}}</td>
        <td class="table-danger">{{$libro->anio_publicacion}}</td>
        <td class="table-danger">{{$libro->cantidad_disponible}}</td>
        <td><a href= "" >Editar</a></td>

        <td>
            <form  method="post" action="">
                @method("DELETE")
                @csrf
                <td><a href= "" >Eliminar</a></td>
            </form>
        </td>


    </tr>
    @empty {{-- EL EMPTY SOLO MUESTRA UNA TABLA CUANDO NO AHI DATOS--}}
    <tr>
        <td colspan="5">No hay libros</td>
    </tr>
    @endforelse {{-- ESTA PARTE SIEMPRE VA--}}

    </tbody>
</table>

{{ $libros->render('pagination::bootstrap-4') }} {{-- ESTO SE PONE PARA QUE NO TENGAN EL ERROR DE JUNIUR --}}

@endsection() {{-- ESTA PARTE SIEMPRE VA--}}
