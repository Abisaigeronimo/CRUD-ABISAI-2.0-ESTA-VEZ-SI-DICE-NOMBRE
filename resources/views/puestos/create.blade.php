@extends('layouts.app')

@section('title', 'Crear Nuevo Puesto')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Crear Nuevo Puesto</h1>

    <form action="{{ route('puestos.store') }}" method="POST">
        @csrf
        
        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
            <input type="text" name="rfc" class="form-control" placeholder="RFC" required maxlength="13">
            <span class="input-group-text">RFC</span>
        </div>

        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
            <input type="number" name="clave_puesto" class="form-control" placeholder="Clave Puesto" required>
            <span class="input-group-text">Clave Puesto</span>
        </div>

        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fas fa-clock"></i></span>
            <input type="number" name="horas_asignadas" class="form-control" placeholder="Horas Asignadas">
            <span class="input-group-text">Horas Asignadas</span>
        </div>

        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
            <input type="datetime-local" name="fecha_ingreso_puesto" class="form-control" required>
            <span class="input-group-text">Fecha de Ingreso</span>
        </div>

        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fas fa-calendar-times"></i></span>
            <input type="datetime-local" name="fecha_termino_puesto" class="form-control">
            <span class="input-group-text">Fecha de Término</span>
        </div>

        <div class="mb-3 input-group">
            <span class="input-group-text"><i class="fas fa-calendar-check"></i></span>
            <input type="datetime-local" name="fecha_de_ratificacion_puesto" class="form-control">
            <span class="input-group-text">Fecha de Ratificación</span>
        </div>

        <button type="submit" class="btn btn-primary">Crear Puesto</button>
    </form>
</div>
@endsection