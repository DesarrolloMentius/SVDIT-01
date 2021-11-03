<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $fillable = [

        'cedula',
        'fecha_exp',
        'fecha_nacimiento',
        'primer_nombre',
        'segundo_nombre',
        'primer_apellido',
        'segundo_apellido',
        'numero_contacto',
        'correo_electronico',
        'cargo',
        'proceso'

    ];
}
