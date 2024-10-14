<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NombresPaquetes extends Model
{
    use HasFactory;

    protected $table = 'nombres_paquetes';

    // Relación con la tabla promociones_paquetes
    public function promocion()
    {
        return $this->belongsTo(PromocionPaquete::class, 'fk_promocion', 'id_promocion');
    }
}
