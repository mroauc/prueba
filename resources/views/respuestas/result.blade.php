@extends('layouts.app')

@section('content')

<table class="table table-light table-hover">

	<thread class="thread-light">
		<tr>
			<th>Rut Estudiante</th>
			<th>Respuesta 1</th>
			<th>Respuesta 2</th>
			<th>Respuesta 3</th>
		</tr>
	</thread>

	<tbody>
		@foreach($respuesta as $rest)
		<tr>
			<td>{{ $rest->rutEstudiante}}</td>
			<td>{{ $rest->respuesta1}}</td>
			<td>{{ $rest->respuesta2}}</td>
			<td>{{ $rest->respuesta3}}</td>
		</tr>
		@endforeach
		<a class="btn btn-primary" href="{{ url('encuestas') }}">Regresar</a>
	</tbody>
</table>

@endsection