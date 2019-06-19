@extends('layouts.app')

@section('content')

<div class="container">


<form action="{{ url('/respuestas') }}" class="form-horizontal" method="post">
{{ csrf_field() }}
@foreach($datos as $dato)
<div class="form-group">
	<label for="id_encuesta" class="control-lavel">{{ 'ID Encuesta: '}}</label>
	<input type="text" class="form-control" name="idencuesta" id="idencuesta" value="{{$dato->id_encuesta}}" readonly="readonly">
</div>

<div class="form-group">
	<label for="rutEstudiante" class="control-lavel">{{ 'Rut Estudiante' }}</label>
	<input type="text" class="form-control" name="rutEstudiante" id="rutEstudiante" value="{{auth()->user()->rut}}"readonly="readonly">
</div>

<div class="form-group">
	<label for="pregunta1" class="control-lavel">{{ $dato->pregunta1 }}</label>
	<input type="text" class="form-control" name="respuesta1" id="respuesta1" value="">
</div>

<div class="form-group">
	<label for="pregunta2" class="control-lavel">{{ $dato->pregunta2 }}</label>
	<input type="text" class="form-control" name="respuesta2" id="respuesta2" value="">
</div>

<div class="form-group">
	<label for="pregunta3" class="control-lavel">{{ $dato->pregunta3 }}</label>
	<input type="text" class="form-control" name="respuesta3" id="respuesta3" value="">
</div>
@endforeach

<input type="submit" class="btn btn-success" value="Agregar">
<a class="btn btn-primary" href="{{ url('respuestas') }}">Regresar</a>
</form>

</div>
@endsection