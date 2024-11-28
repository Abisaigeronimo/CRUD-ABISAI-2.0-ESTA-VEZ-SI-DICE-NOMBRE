@extends('layouts.app')

@section('title', 'Editar Puesto')

@section('content')
<div class="container">
    <h1>Editar Puesto</h1>

    <form action="{{ route('puestos.update', $puesto->rfc) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="rfc" class="form-label">RFC:</label>
            <input type="text" name="rfc" value="{{ old('rfc', $puesto->rfc) }}" class="form-control" required maxlength="13" readonly>
        </div>

        <div class="mb-3">
            <label for="clave_puesto" class="form-label">Clave Puesto:</label>
            <input type="number" name="clave_puesto" value="{{ old('clave_puesto', $puesto->clave_puesto) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="horas_asignadas" class="form-label">Horas Asignadas:</label>
            <input type="number" name="horas_asignadas" value="{{ old('horas_asignadas', $puesto->horas_asignadas) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fecha_ingreso_puesto" class="form-label">Fecha Ingreso:</label>
            <input type="datetime-local" name="fecha_ingreso_puesto" value="{{ old('fecha_ingreso_puesto', \Carbon\Carbon::parse($puesto->fecha_ingreso_puesto)->format('Y-m-d\TH:i')) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="fecha_termino_puesto" class="form-label">Fecha Término:</label>
            <input type="datetime-local" name="fecha_termino_puesto" value="{{ old('fecha_termino_puesto', \Carbon\Carbon::parse($puesto->fecha_termino_puesto)->format('Y-m-d\TH:i')) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="fecha_de_ratificacion_puesto" class="form-label">Fecha Ratificación:</label>
            <input type="datetime-local" name="fecha_de_ratificacion_puesto" value="{{ old('fecha_de_ratificacion_puesto', \Carbon\Carbon::parse($puesto->fecha_de_ratificacion_puesto)->format('Y-m-d\TH:i')) }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Puesto</button>
    </form>

</div>
@endsection