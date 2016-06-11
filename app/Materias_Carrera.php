<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materias_Carrera extends Model
{
    protected $table = 'materias_carreras';

    public function materias(){
		return $this->hasMany('App\Materia','id_materia','id');
	}

	public function carreras(){
		return $this->hasMany('App\Carrera','id_carrera','id');
	}
}
