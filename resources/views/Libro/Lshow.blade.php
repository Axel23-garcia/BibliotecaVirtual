@extends('Plantilla.plantilla')  {{-- ESTA PARTE SIEMPRE VA--}}

@section('titulo','show') {{-- ESTA PARTE SIEMPRE VA--}}

@section('contenido') {{-- ESTA PARTE SIEMPRE VA--}}

<h1><center>Mostrar datos de los libros Individuales (SHOW)</center></h1>

<h6><b>ID</b></h6>
<p>{{$libro->id}}</p>

<h6><b>Titulo</b></h6>
<p>{{$libro->titulo}}</p>

<h6><b>Apellido</b></h6>
<p>{{$libro->apellido}}</p>

<h6><b>Correo</b></h6>
<p>{{$libro->correo_electronico}}</p>

<h6><b>Telefono</b></h6>
<p>{{$contacto->telefono}}</p>

@endsection
