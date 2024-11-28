@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Nuevo Puesto</h1>

    <form action="{{ route('puestos.store') }}" method="POST">
        @csrf
        
        <div class="mb-3">
            <label for="rfc" class="form-label">RFC:</label>
            <input type="text" name="rfc" class="form-control" required maxlength="13">
        </div>

        <div class="mb-3">
            <label for="clave_puesto" class="form-label">Clave Puesto:</label>
            <input type="number" name="clave_puesto" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="horas_asignadas" class="form-label">Horas Asignadas:</label>
            <input type="number" name="horas_asignadas" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fecha_ingreso_puesto" class="form-label">Fecha Ingreso:</label>
            <input type="datetime-local" name="fecha_ingreso_puesto" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="fecha_termino_puesto" class="form-label">Fecha Término:</label>
            <input type="datetime-local" name="fecha_termino_puesto" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fecha_de_ratificacion_puesto" class="form-label">Fecha Ratificación:</label>
            <input type="datetime-local" name="fecha_de_ratificacion_puesto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Crear Puesto</button>
    </form>

</div>
@endsection