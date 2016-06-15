<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semestre extends Model
{
	

	public function materias(){
		return $this->hasMany('App\Materia','sem','id');
	}    
}
