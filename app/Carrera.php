<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
	public function materias()
	{
		return $this->hasManyThrough('App\Materia','App\Materia_Carrera','id_carrera','id');
	}

}
