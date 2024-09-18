<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelUser extends Model
{
    use HasFactory;
    
    protected $table = 'alumnos';

    protected $fillable = [
        'DNI',
        'APELLIDO_PATERNO',
        'APELLIDO_MATERNO',
        'NOMBRES',
        'EMAIL',
        'CODIGO_CARRERA',
        'TELEFONO',
        'DIRECCION',
        'PERIODO_INGRESO',
        'SEMESTRE_INGRESO',
        'PERIODO_EGRESO',
        'SEMESTRE_EGRESO',
        'ANIO_BACHILLER',
        'PERIODO_TITULO',
    ];
}
