<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;

    protected $table = 'inventario';
    protected $fillable = [
        'nombre',
        'descripcion',
        'cantidades',
        'talla',
        'color',
        'precio',
    ];

    public function ventas()
    {
        return $this->hasMany(venta::class);
    }

}
