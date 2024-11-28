<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PuestoPersonal extends Model
{
    use HasFactory;

    protected $table = 'puestos_personal';
    
    protected $primaryKey = 'rfc'; // Especifica que 'rfc' es la clave primaria
    
    public $incrementing = false; // Indica que la clave primaria no es auto incremental

    protected $fillable = [
        'rfc',
        'clave_puesto',
        'horas_asignadas',
        'fecha_ingreso_puesto',
        'fecha_termino_puesto',
        'fecha_de_ratificacion_puesto',
    ];

}
