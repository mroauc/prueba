@extends('layouts.app')

@section('content')

<div class="container">


<form action="{{ url('/encuestas/'.$encuesta->id_encuesta) }}" class="form-horizontal" method="post">
{{ csrf_field() }}
{{ method_field('PATCH') }}

	<div class="form-group">
		<label for="pregunta1" class="control-label">{{'Pregunta 1'}}</label>
		<input type="text" class="form-control" name="pregunta1" id="pregunta1" value="{{ $encuesta->pregunta1}}">
	</div>

	<div class="form-group">
		<label for="pregunta2" class="control-label">{{'Pregunta 2'}}</label>
		<input type="text" class="form-control" name="pregunta2" id="pregunta2" value="{{ $encuesta->pregunta2}}">
	</div>
	
	<div class="form-group">
		<label for="pregunta3" class="control-label">{{'Pregunta 3'}}</label>
		<input type="text" class="form-control" name="pregunta3" id="pregunta3" value="{{ $encuesta->pregunta3}}">
	</div>
	

	<div class="form-group">
		<label for="codigoCurso" class="control-label">{{'Codigo del Curso'}}</label>
		<input type="text" class="form-control" name="codigoCurso" id="codigoCurso" value="{{ $encuesta->codigoCurso}}">
	</div>
	

	<div class="form-group">
		<label for="rutProfesor" class="control-label">{{'Rut Profesor'}}</label>
		<input type="text" class="form-control" name="rutProfesor" id="rutProfesor" value="{{ $encuesta->rutProfesor}}">
	</div>
	

	<div class="form-group">
		<label for="asunto" class="control-label">{{'Asunto'}}</label>
		<input type="text" class="form-control" name="asunto" id="asunto" value="{{ $encuesta->asunto}}">
	</div>
	

	<input type="submit" class="btn btn-success" value="Modificar">
	<a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar</a>

</form>
</div>

@endsection