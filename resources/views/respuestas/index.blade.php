@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{ url('/respuestas/show') }}" class="form-horizontal" method="post"   >
	{{ csrf_field() }}
	<div class="form-group">
		<label for="Nombre">{{'Ingrese la ID de la encuesta a responder'}}</label>
		<input type="text" class="form-control" name="id_encuesta" id="id_encuesta" value="">

		<input type="submit" class="btn btn-success" value="Responder Encuesta">
	</div>
</form>

</div>
@endsection