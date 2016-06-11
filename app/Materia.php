<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //

    public function carrera()
	{
		return $this->hasManyThrough('App\Carrera','App\Materia_Carrera','id_materia','id');
	}
}
