@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','index') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Tabla de Libros (index)</center></h1>
<button><center><a class="btn btn" href= ""><u>Crear</u></a></center></button>


<table class="table" class="pagination">
    <thead>
    <th>id</th>
    <th>Titulo</th>
    <th>Autor</th>
    <th>Editorial</th>
    <th>Año Publicacion</th>
    <th>Cantidad Disponible</th>
    <th>Editar</th>
    <th>Eliminar</th>



    </thead>
    <tbody>
    @forelse($libros as $libro) {{-- ESTA PARTE SIEMPRE VA--}}
    <tr>
        <td>{{$libro->id}}</td>
        <td>{{$libro->titulo}}</td> {{-- ESTOS SON LOS DATOS DE LA TABLA(MIGRACION) --}}
        <td>{{$libro->autor}}</td>
        <td>{{$libro->editorial}}</td>
        <td>{{$libro->anio_publicacion}}</td>
        <td>{{$libro->cantidad_disponible}}</td>
        <td><a href= "" >EDITAR</a></td>

        <td>
            <form  method="post" action="">
                @method("DELETE")
                @csrf
                <button type="submit" class="btn btn-danger">Eliminar</button>
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
