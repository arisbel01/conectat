<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = 'clientes';

    protected $fillable = [
        'codigoPostal', 'calle', 'noExterior', 'correo', 'ciudad', 'alcaldia', 'colonia', 'entreCalle1', 'entreCalle2', 'manzana', 'lote',
        // Incluir todos los campos del formulario
    ];
}

