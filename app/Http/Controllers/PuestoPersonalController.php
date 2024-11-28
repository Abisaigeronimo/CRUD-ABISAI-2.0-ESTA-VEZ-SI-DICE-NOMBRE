<?php

namespace App\Http\Controllers;

use App\Models\PuestoPersonal;
use Illuminate\Http\Request;

class PuestoPersonalController extends Controller
{
    public function index()
    {
        $puestos = PuestoPersonal::all();
        return view('puestos.index', compact('puestos'));
    }

    public function create()
    {
        return view('puestos.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'rfc' => 'required|size:13',
            'clave_puesto' => 'required|integer',
            'horas_asignadas' => 'nullable|integer',
            'fecha_ingreso_puesto' => 'required|date',
            'fecha_termino_puesto' => 'nullable|date',
            'fecha_de_ratificacion_puesto' => 'nullable|date',
        ]);

        // Crear una nueva instancia del modelo y guardar los datos
        PuestoPersonal::create($request->all());

        // Redirigir a la vista de índice con un mensaje de éxito
        return redirect()->route('puestos.index')->with('success', 'Puesto creado exitosamente.');
    }

    public function show($rfc)
{
    $puesto = PuestoPersonal::findOrFail($rfc); // Busca por RFC
    return view('puestos.show', compact('puesto'));
}

public function edit($rfc)
{
    $puesto = PuestoPersonal::findOrFail($rfc);
    return view('puestos.edit', compact('puesto'));
}

public function update(Request $request, $rfc)
{
    $request->validate([
        'clave_puesto' => 'required|integer',
        'horas_asignadas' => 'nullable|integer',
        'fecha_ingreso_puesto' => 'required|date',
        'fecha_termino_puesto' => 'nullable|date',
        'fecha_de_ratificacion_puesto' => 'nullable|date',
    ]);

    $puesto = PuestoPersonal::findOrFail($rfc);
    $puesto->update($request->all());

    return redirect()->route('puestos.index')->with('success', 'Puesto actualizado exitosamente.');
}
public function destroy($rfc)
{
    $puesto = PuestoPersonal::findOrFail($rfc);
    $puesto->delete();

    return redirect()->route('puestos.index')->with('success', 'Puesto eliminado exitosamente.');
}

}
