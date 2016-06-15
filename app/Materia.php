<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    /**
    *
    *
    */

	public function semestre(){
		return $this->belongsTo('App\Semestre','sem');
	}

  public function getPrelacion1Attribute(){
    if(!$this->pre1)
    {
      return 'Ninguna';
    }
    else
    {
      $materia = Materia::find($this->pre1);
      return Materia::find($this->pre1);
    }
  }

  public function isDoble(){
    if($this->pre2)
    {
      return true;
    }
    else {
      return false;
    }
  }

  public function getPrelacion2Attribute(){
    return Materia::find($this->pre2);
  }

  public function carreras()
	{
		return $this->belongsToMany('App\Carrera','materia_carreras');
	}
}
