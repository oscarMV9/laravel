<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produccion extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_producto';

    protected $fillable = [
        'nombre_producto',
        'talla',
        'color',
        'cantidad',
        'fecha_produccion',
        'fecha_fin_produccion',
        'estado',
        'id_encargado',
        'nombre_encargado',
        'apellido_encargado'
    ];
}
