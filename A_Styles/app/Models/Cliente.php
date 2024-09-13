<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['identificacion','nombre', 'apellido', 'telefono', 'direccion', 'prenda_comprada'];

    public function logisticas()
    {
        return $this->hasMany(Logistica::class);
    }
}
