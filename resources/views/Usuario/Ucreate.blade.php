@extends('Plantilla.plantilla')

@section('titulo','create')

@section('contenido')

    <h1>Formulario De Usuarios</h1>

    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('usuario.crear')}}">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese el nombre">
        </div>

        <div class="form-group">
            <label for="correo_electronico">Correo Electronico</label>
            <input type="email" class="form-control" name="correo_electronico" id="correo_electronico" placeholder="Ingrese el correo">
        </div>

        <div class="form-group">
            <label for="telefono">Telefono</label>
            <input type="number" class="form-control" name="telefono" id="telefono" placeholder="Ingrese el telefono">
        </div>

        <div class="form-group">
            <label for="direccion">Direccion</label>
            <input type="text" class="form-control" name="direccion" id="direccion" placeholder="Ingrese la direccion">
        </div>

         <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-success" href="{{route('usuario.index')}}">Cancelar</a>
        </div>
    </form>

@endsection()
