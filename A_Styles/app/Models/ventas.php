<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;

    protected $fillable = [
        'documento_cliente',
        'nombre_cliente',
        'apellido_cliente',
        'inventario_id',
        'cantidad_comprada',
        'precio_unitario',
        'precio_total',
    ];

    public function inventario()
    {
        return $this->belongsTo(Inventario::class);
    }

}
