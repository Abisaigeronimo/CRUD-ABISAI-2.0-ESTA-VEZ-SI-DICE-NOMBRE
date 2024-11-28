@extends('layouts.app')

@section('title', 'Detalles del Puesto')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Detalles del Puesto</h1>

    <div class="card text-white bg-dark mb-3">
        <div class="card-header">
            Información del Puesto
        </div>
        <div class="card-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><strong>RFC:</strong> {{ $puesto->rfc }}</li>
                <li class="list-group-item"><strong>Clave Puesto:</strong> {{ $puesto->clave_puesto }}</li>
                <li class="list-group-item"><strong>Horas Asignadas:</strong> {{ $puesto->horas_asignadas }}</li>
                <li class="list-group-item"><strong>Fecha de Ingreso:</strong> {{ \Carbon\Carbon::parse($puesto->fecha_ingreso_puesto)->format('d/m/Y H:i') }}</li>
                <li class="list-group-item"><strong>Fecha de Término:</strong> {{ $puesto->fecha_termino_puesto ? \Carbon\Carbon::parse($puesto->fecha_termino_puesto)->format('d/m/Y H:i') : 'N/A' }}</li>
                <li class="list-group-item"><strong>Fecha de Ratificación:</strong> {{ $puesto->fecha_de_ratificacion_puesto ? \Carbon\Carbon::parse($puesto->fecha_de_ratificacion_puesto)->format('d/m/Y H:i') : 'N/A' }}</li>
            </ul>
        </div>
        <div class="card-footer text-end">
            <a href="{{ route('puestos.edit', $puesto->rfc) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('puestos.destroy', $puesto->rfc) }}" method="POST" style='display:inline;'>
                @csrf
                @method('DELETE')
                <button type='submit' onclick='return confirm("¿Estás seguro que deseas eliminar este puesto?");' 
                        class='btn btn-danger'>Eliminar</button>
            </form>
            <a href="{{ route('puestos.index') }}" class='btn btn-secondary'>Regresar</a>
        </div>
    </div>
</div>
@endsection