<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    //
    protected $fillable = ['Id','idencuesta','rutEstudiante','respuesta1', 'respuesta2','respuesta3'];
    protected $primaryKey = 'Id';
}
