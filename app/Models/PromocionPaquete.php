<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionPaquete extends Model
{
    use HasFactory;

    protected $table = 'promociones_paquetes';

    // Relación inversa con nombres_paquetes
    public function nombresPaquetes()
    {
        return $this->hasMany(NombresPaquetes::class, 'fk_promocion', 'id_promocion');
    }
}
