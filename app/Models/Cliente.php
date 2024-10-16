<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente'; // Define la clave primaria correctamente
    protected $fillable = [
        'nombre_completo', 'cp', 'municipio', 'direccion', 'correo', 'telefono','referencia_domicilio','fk_paquete', 
        // Incluir todos los campos del formulario
    ];
}

