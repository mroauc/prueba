@extends('layouts.app')

<style>.auto{
	    color: #fff;
    background-color: #3490dc;
    border-color: #3490dc;
}</style>
@section('content')

<div class="container">


@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
	<ul>
		@foreach($errors->all() as $error)

		<li>{{ $error}}</li>

		@endforeach
	</ul>

</div>
@endif


Seccion para crear encuestas
<form action="{{url('/encuestas')}}" class="form-horizontal" method="post">
	{{ csrf_field() }}
	<!-- <div class="form-group">
		<label for="pregunta1" class="control-label">{{'Pregunta 1'}}</label>
		<input type="text" class="form-control {{$errors->has('pregunta1')?'is-invalid':''}}" name="pregunta1" id="pregunta1" value="">
		{!! $errors->first('pregunta1','<div class="invalid-feedback">:message</div>') !!}
	</div>
	
	<div class="form-group">
		<label for="pregunta2" class="control-label">{{'Pregunta 2'}}</label>
		<input type="text" class="form-control {{$errors->has('pregunta2')?'is-invalid':''}}" name="pregunta2" id="pregunta2" value="">
		{!! $errors->first('pregunta2','<div class="invalid-feedback">:message</div>') !!}
	</div>
	
	<div class="form-group">
		<label for="pregunta3" class="control-label">{{'Pregunta 3'}}</label>
		<input type="text" class="form-control {{$errors->has('pregunta3')?'is-invalid':''}}" name="pregunta3" id="pregunta3" value="">
		{!! $errors->first('pregunta3','<div class="invalid-feedback">:message</div>') !!}
	</div> -->

	<div class="form-group">
		<label for="rutProfesor" class="control-label">{{'Rut Profesor'}}</label>
		<input type="text" class="form-control {{$errors->has('rutProfesor')?'is-invalid':''}}" name="rutProfesor" id="rutProfesor" value="{{auth()->user()->rut}}" readonly="readonly">
		{!! $errors->first('rutProfesor','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
		<label for="codigoCurso" class="control-label">{{'Codigo del Curso'}}</label>
		<input type="text" class="form-control {{$errors->has('codigoCurso')?'is-invalid':''}}" name="codigoCurso" id="codigoCurso" value="">
		{!! $errors->first('codigoCurso','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div class="form-group">
		<label for="asunto" class="control-label">{{'Asunto'}}</label>
		<input type="text" class="form-control {{$errors->has('asunto')?'is-invalid':''}}" name="asunto" id="asunto" value="">
		{!! $errors->first('asunto','<div class="invalid-feedback">:message</div>') !!}
	</div>

	<div>
	 	 <a class="btn btn-primary btn-lg" data-toggle="modal" href="#modal_agregar">Añadir Pregunta</a>
	</div>

	<br>
	<input type="submit" class="btn btn-success" value="Agregar">

	<a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar</a>

</form>
</div>
 
 <!-- NUEVOOOOO -->

<!-- Modal Agregar Nueva Encuesta -->
<div class="modal fade" id="modal_agregar">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
            	<h4 class="modal-title">Agregar Nueva Encuesta</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

            	<div class="form-group row">
      					<label for="titulo" class="col-sm-3 col-form-label">Título</label>
      					<div class="col-sm-9">
      						<input type="text" class="form-control" id="titulo" placeholder="Título" autocomplete="off" autofocus>
      					</div>
      				</div>
              <div class="form-group row">
                <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                <div class="col-sm-9">
                  <textarea class="form-control" id="descripcion" placeholder="Descripción"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="fecha_final" class="col-sm-3 col-form-label">Fecha Final</label>
               
              </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="agregarEncuesta()">Agregar Encuesta</button>
                
            </div>

        </div>
    </div>
</div>

@endsection