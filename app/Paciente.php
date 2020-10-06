<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    //
    //
    //
    //
   public function antecedente(){
	   return $this->hasOne(Antecedente::class,'id_paciente','id');
}


}


