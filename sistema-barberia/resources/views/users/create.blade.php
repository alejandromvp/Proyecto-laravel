@extends('layout') <!-- extiende de blade layout.blade.php -->


@section('titulo')
    detalle barbero
@endsection

@section('content') 
	<h1> Crear Usuario</h1>

  	<form method="POST" action="{{ url('/barberos')}}">
  		{{csrf_field()}}

		<label for="name">Nombre:</label>
  		<input type="text" name="name" id="name"><br>

		<label for="email">Correo Electronico</label>
  		<input type="email" name="email" id="email"><br>

		<label for="password"> password</label>
  		<input type="password" name="password" id="password"><br>

		<button type="submit">Crear Usuario</button>  		
  	</form>

    <h2><a href="{{ url()->previous() }}">Regresar</a></h2>

@endsection
