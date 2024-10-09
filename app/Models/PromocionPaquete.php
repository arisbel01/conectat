<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocionPaquete extends Model
{
    use HasFactory;

    protected $table = 'promociones_paquetes';
    protected $primaryKey = 'id_promocion';
    public $timestamps = false;

    // Si la tabla promociones está relacionada con nombres_paquetes
    public function paquetes()
    {
        return $this->hasMany(NombrePaquete::class, 'fk_promocion', 'id_promocion');
    }
}
