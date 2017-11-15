<?php

namespace Peter;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombre', 'apellidos', 'edad', 'sexo',
    ];
}
