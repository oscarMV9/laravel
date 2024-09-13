<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logistica extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'id_transportista', 'nombre_transportista', 'estado_envio', 'fecha_envio', 'fecha_recibido', 'nota'];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
