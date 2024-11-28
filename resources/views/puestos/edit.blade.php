@extends('layouts.app')

@section('title', 'Editar Puesto')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Editar Puesto</h1>

    <form action="{{ route('puestos.update', $puesto->rfc) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="rfc" class="form-label"><i class="fas fa-id-card"></i> RFC</label>
            <input type="text" name="rfc" class="form-control" value="{{ old('rfc', $puesto->rfc) }}" readonly>
        </div>

        <div class="mb-3">
            <label for="clave_puesto" class="form-label"><i class="fas fa-key"></i> Clave Puesto</label>
            <input type="text" name="clave_puesto" class="form-control" value="{{ old('clave_puesto', $puesto->clave_puesto) }}" required maxlength="20">
        </div>

        <div class="mb-3">
            <label for="horas_asignadas" class="form-label"><i class="fas fa-clock"></i> Horas Asignadas</label>
            <input type="number" name="horas_asignadas" class="form-control" value="{{ old('horas_asignadas', $puesto->horas_asignadas) }}" placeholder="Horas Asignadas">
        </div>

        <div class="mb-3">
            <label for="fecha_ingreso_puesto" class="form-label"><i class="fas fa-calendar-alt"></i> Fecha de Ingreso</label>
            <input type="datetime-local" name="fecha_ingreso_puesto" class="form-control" value="{{ old('fecha_ingreso_puesto', \Carbon\Carbon::parse($puesto->fecha_ingreso_puesto)->format('Y-m-d\TH:i')) }}" required>
        </div>

        <div class="mb-3">
            <label for="fecha_termino_puesto" class="form-label"><i class="fas fa-calendar-times"></i> Fecha de Término</label>
            <input type="datetime-local" name="fecha_termino_puesto" class="form-control" value="{{ old('fecha_termino_puesto', \Carbon\Carbon::parse($puesto->fecha_termino_puesto)->format('Y-m-d\TH:i')) }}">
        </div>

        <div class="mb-3">
            <label for="fecha_de_ratificacion_puesto" class="form-label"><i class="fas fa-calendar-check"></i> Fecha de Ratificación</label>
            <input type="datetime-local" name="fecha_de_ratificacion_puesto" class="form-control" value="{{ old('fecha_de_ratificacion_puesto', \Carbon\Carbon::parse($puesto->fecha_de_ratificacion_puesto)->format('Y-m-d\TH:i')) }}">
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Puesto</button>
    </form>
</div>
@endsection