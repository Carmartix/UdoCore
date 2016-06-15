<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleCarrera extends Model
{
    protected $table = 'detalle_carreras';

    public function carrera()
    {
        return $this->belongsTo('\App\Carrera');
    }
}
