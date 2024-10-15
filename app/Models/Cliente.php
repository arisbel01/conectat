<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nombre_completo', 'cp', 'municipio', 'direccion', 'colonia', 'referencias adicionales', 'correo', 'telefono', 
        // Incluir todos los campos del formulario
    ];
}

