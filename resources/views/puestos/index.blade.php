@extends('layouts.app')

@section('title', 'Lista de Puestos')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4" style="font-family: 'Poppins', sans-serif; color: white;">Puestos de Personal</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('puestos.create') }}" class="btn btn-primary mb-3">
        <i class="fas fa-plus"></i> Crear Nuevo Puesto
    </a>

    <table id='puestosTable' class='table table-dark table-striped table-bordered'>
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
                    <td>{{ \Carbon\Carbon::parse($puesto->fecha_ingreso_puesto)->format('d/m/Y H:i') }}</td>
                    <td>
                        <!-- Botón Show -->
                        <a href="{{ route('puestos.show', $puesto->rfc) }}" class='btn btn-info btn-sm'>
                            <i class="fas fa-eye"></i> Ver
                        </a>

                        <!-- Botón Editar -->
                        <a href="{{ route('puestos.edit', $puesto->rfc) }}" class='btn btn-warning btn-sm'>
                            <i class="fas fa-pencil-alt"></i> Editar
                        </a>

                       <!-- Botón Eliminar -->
<button type='button' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#deleteModal{{ $puesto->rfc }}'>
    <i class="fas fa-trash-alt"></i> Eliminar
</button>

<!-- Modal de Confirmación -->
<div class="modal fade" id="deleteModal{{ $puesto->rfc }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $puesto->rfc }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{ $puesto->rfc }}">Confirmar Eliminación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p style="color: #343a40;">¿Estás seguro que deseas eliminar este puesto?</p> <!-- Texto oscuro -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <form action="{{ route('puestos.destroy', $puesto->rfc) }}" method='POST' style='display:inline;'>
                    @csrf
                    @method('DELETE')
                    <button type='submit' class='btn btn-danger'>Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $puestos->links() }} <!-- Paginación si está habilitada -->
</div>

<script>
// Inicializar DataTable
$(document).ready(function() {
    $('#puestosTable').DataTable();
});
</script>

@endsection