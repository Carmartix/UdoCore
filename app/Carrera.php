<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    //
		/**
		* Materias de la Carrera (relacion muchos a muchos)
		*
		* @return Array \App\Materias
		*/
	public function materias()
	{
		return $this->belongsToMany('App\Materia','materia_carreras');
	}
	/**
	* Detalles de Carreras (Funcion de Relacion uno a uno con DetalleCarrera)
	*
	* @return \App\DetalleCarrera
	*/
	public function detalles()
	{
		return $this->hasOne('App\DetalleCarrera');
	}

}
