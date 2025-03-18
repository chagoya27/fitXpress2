<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Persona extends Model
{

    //habilitar campos para asignacion masiva
    protected $fillable=[
        'usuario',
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'correo',
        'password',
    ];

    protected $table = 'personas';





}
