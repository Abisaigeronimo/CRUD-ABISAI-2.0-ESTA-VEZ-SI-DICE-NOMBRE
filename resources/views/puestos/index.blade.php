@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Puestos de Personal</h1>
    <a href="{{ route('puestos.create') }}" class="btn btn-primary mb-3">Crear Nuevo Puesto</a>
    
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <table class="table">
        <thead>
            <tr>
                <th>RFC</th>
                <th>Clave Puesto</th>
                <th>Horas Asignadas</th>
                <th>Fecha Ingreso</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($puestos as $puesto)
                <tr>
                    <td>{{ $puesto->rfc }}</td>
                    <td>{{ $puesto->clave_puesto }}</td>
                    <td>{{ $puesto->horas_asignadas }}</td>
                    <td>{{ $puesto->fecha_ingreso_puesto }}</td>
                    <td>
                        <!-- Botón Show -->
                        <a href="{{ route('puestos.show', $puesto->rfc) }}" class="btn btn-info">
                            <i class="fa fa-eye"></i> Ver
                        </a>
                    
                        <!-- Botón Editar con ícono de lápiz -->
                        <a href="{{ route('puestos.edit', $puesto->rfc) }}" class="btn btn-warning">
                            <i class="fas fa-pencil-alt"></i> Editar
                        </a>
                    
                        <!-- Botón Eliminar -->
                        <form action="{{ route('puestos.destroy', $puesto->rfc) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este puesto?');">
                                <i class="fas fa-trash-alt"></i> Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection