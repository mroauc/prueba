<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class encuestas extends Model
{
    //
    protected $table ="encuestas";
    protected $fillable = ['id_encuesta','pregunta1', 'pregunta2','pregunta3','codigoCurso','rutProfesor','asunto'];
    protected $primaryKey = 'id_encuesta';

}
