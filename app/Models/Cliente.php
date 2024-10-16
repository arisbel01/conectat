<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'nombre_completo', 'cp', 'municipio', 'direccion', 'correo', 'telefono','fk_paquete', 
        // Incluir todos los campos del formulario
    ];
}

