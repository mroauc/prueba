@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{ Session::get('Mensaje')}}
</div>

@endif

<a href="{{ url('encuestas/create') }}" class="btn btn-success" >Agregar Encuesta</a>
<br/>
<br/>

<table class="table table-light table-hover">

	<thread class="thread-light">
		<tr>
			<!-- <th>#</th> -->
			<th>Id Encuesta</th>
			<th>Pregunta 1</th>
			<th>Pregunta 2</th>
			<th>Pregunta 3</th>
			<th>Codigo Curso</th>
			<th>Rut Profesor</th>
			<th>Asunto</th>
			<th>Acciones</th>
		</tr>
	</thread>

	<tbody>
		@foreach($encuestas as $encuesta)
		<tr>
		
			<td>{{ $encuesta->id_encuesta}}</td>
			<td>{{ $encuesta->pregunta1}}</td>
			<td>{{ $encuesta->pregunta2}}</td>
			<td>{{ $encuesta->pregunta3}}</td>
			<td>{{ $encuesta->codigoCurso}}</td>
			<td>{{ $encuesta->rutProfesor}}</td>
			<td>{{ $encuesta->asunto}}</td>

			<td>
				<a class="btn btn-warning" href="{{ url('/encuestas/'.$encuesta->id_encuesta.'/edit') }}">Editar
				</a>

				<form method="post" action="{{ url('/encuestas/'.$encuesta->id_encuesta) }}" style="display:inline">
				<button class="btn btn-danger" type="sub
				mit" onclick="return confirm('¿Borrar?');" >Borrar</button>
				</form>
				<a class="btn btn-secondary" href="{{url('/respuestas/'.$encuesta->id_encuesta.'/result')}}">Ver Resultados
				</a>

			</td>
		</tr>
		@endforeach
	</tbody>
</table>



</div>
@endsection