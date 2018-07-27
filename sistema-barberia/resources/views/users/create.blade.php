@extends('layout') <!-- extiende de blade layout.blade.php -->


@section('titulo')
    detalle barbero
@endsection

@section('content') 
	<h1> Crear Usuario</h1>

	@if ($errors->any())
                <div class="alert alert-danger">
                    <h6>Por favor corrige los errores debajo:</h6>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
	@endif

  	<form method="POST" action="{{ url('/barberos')}}">
  		{{csrf_field()}}

		<label for="name">Nombre:</label>
  		<input type="text" name="name" id="name" value="{{ old('name')}}"><br>

		<label for="email">Correo Electronico</label>
  		<input type="email" name="email" id="email" value="{{ old('email')}}"><br>

		<label for="password"> password</label>
  		<input type="password" name="password" id="password" value="{{ old('password')}}"><br>

		<button type="submit">Crear Usuario</button>  		
  	</form>

    <!-- <h2><a href="{{ url()->previous() }}">Regresar</a></h2> -->
    <h2><a href="{{ route('users.index')}}">Regresar a listado usuarios</a></h2>	

@endsection
