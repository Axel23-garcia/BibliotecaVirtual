@extends('Plantilla.plantilla')

@section('titulo','edit')

@section('contenido')

    <h1>Editar Informacion De Los Prestamos</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{route('prestamo.update', [$prestamo->id])}}" class="needs-validation">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="fecha_solicitud">Fecha Solicitud</label>
            <input type="date" class="form-control" name="fecha_solicitud" id="fecha_solicitud" placeholder="Ingrese la fecha" value = "{{old('fecha_solicitud') ?? $prestamo->fecha_solicitud}}">
        </div>

        <div class="form-group">
            <label for="fecha_prestamo">Fecha Prestamo</label>
            <input type="date" class="form-control" name="fecha_prestamo" id="fecha_prestamo" placeholder="Ingrese la fecha" value = "{{old('fecha_prestamo') ?? $prestamo->fecha_prestamo}}">
        </div>

        <div class="form-group">
            <label for="fecha_devolucion">Fecha Devolucion</label>
            <input type="date" class="form-control" name="fecha_devolucion" id="fecha_devolucion" placeholder="Ingrese la fecha" value="{{old('fecha_devolucion') ?? $prestamo->fecha_devolucion}}">
        </div>

        <div class="form-group">
            <label for="libro_id">Libro ID</label>
            <input type="number" class="form-control" name="libro_id" id="libro_id" placeholder="Ingrese el id" value="{{old('libro_id') ?? $prestamo->libro_id}}">
        </div>

        <div class="form-group">
            <label for="usuario_id">Usuario ID</label>
            <input type="number" class="form-control" name="usuario_id" id="usuario_id" placeholder="Ingrese el ID" value = "{{old('usuario_id') ?? $prestamo->usuario_id}}">
        </div>
        <br>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-success" href="{{route('prestamo.index')}}">Cancelar</a>
        </div>
    </form>

@endsection()
