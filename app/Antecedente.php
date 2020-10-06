<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Antecedente extends Model
{
    //
    



     public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'id', 'id_paciente');
    }
}
 