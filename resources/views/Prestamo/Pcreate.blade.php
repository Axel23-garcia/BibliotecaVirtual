@extends('Plantilla.plantilla')

@section('titulo','create')

@section('contenido')

    <h1>Formulario De Prestamos</h1>

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

    <form method="post" action="{{route('prestamo.crear')}}">
        @csrf
        <div class="form-group">
            <label for="fecha_solicitud">Fecha Solicitud</label>
            <input type="date" class="form-control" name="fecha_solicitud" id="fecha_solicitud" placeholder="Ingrese la fecha">
        </div>

        <div class="form-group">
            <label for="fecha_prestamo">Fecha Prestamo</label>
            <input type="date" class="form-control" name="fecha_prestamo" id="fecha_prestamo" placeholder="Ingrese la fecha">
        </div>

        <div class="form-group">
            <label for="fecha_devolucion">Fecha Devolucion</label>
            <input type="date" class="form-control" name="fecha_devolucion" id="fecha_devolucion" placeholder="Ingrese la fecha">
        </div>

        <div class="form-group">
            <label for="libro_id">Libro ID</label>
            <input type="number" class="form-control" name="libro_id" id="libro_id" placeholder="Ingrese el id">
        </div>

        <div class="form-group">
            <label for="usuario_id">Usuario ID</label>
            <input type="number" class="form-control" name="usuario_id" id="usuario_id" placeholder="Ingrese el id">
        </div>
        <br>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-success" href="{{route('prestamo.index')}}">Cancelar</a>
        </div>
    </form>

@endsection()
