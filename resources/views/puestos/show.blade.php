@extends('layouts.app')

@section('title', 'Detalles del Puesto')

@section('content')
<div class="container">
    <h1>Detalles del Puesto</h1>

    <div class="card">
        <div class="card-header">
            Información del Puesto
        </div>
        <div class="card-body">
            <p><strong>RFC:</strong> {{ $puesto->rfc }}</p>
            <p><strong>Clave Puesto:</strong> {{ $puesto->clave_puesto }}</p>
            <p><strong>Horas Asignadas:</strong> {{ $puesto->horas_asignadas }}</p>
            <p><strong>Fecha Ingreso:</strong> {{ $puesto->fecha_ingreso_puesto }}</p>
            <p><strong>Fecha Término:</strong> {{ $puesto->fecha_termino_puesto }}</p>
            <p><strong>Fecha Ratificación:</strong> {{ $puesto->fecha_de_ratificacion_puesto }}</p>
        </div>
    </div>

    <a href="{{ route('puestos.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
</div>
@endsection