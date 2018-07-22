	@extends('layout') <!-- extiende del archivo layout.blade.php
 -->
 	@section('titulo')
		lista de usuarios		
 	@endsection

	@section('content') 
		<h1> {{ $titulo }}</h1>

    	<ul>
       		@forelse ($userss as $user)
           		<li>{{ $user->name }}</li>
       		@empty
       			<li>No hay usuarios registrados.</li>	
			@endforelse    		
		</ul>

    @endsection

    @section('sidebar')
    	@parent <!-- esta variable sirve para dejar el codigo que esta por defecto en layout.bladeen la seccion sidebar -->
		<h2>barra perdonalizada</h2>
    @endsection
