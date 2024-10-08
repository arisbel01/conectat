<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionPaquete extends Model
{
    use HasFactory;

    // Indicar la tabla correspondiente
    protected $table = 'promociones_paquetes';

    // Definir la clave primaria si no es 'id'
    protected $primaryKey = 'id_promocion';

    // Si no tienes los campos de timestamps (created_at, updated_at)
    public $timestamps = false;

    // Definir los campos que pueden ser rellenados
    protected $fillable = ['promocion'];
}
