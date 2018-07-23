@extends('layout') <!-- extiende de blade layout.blade.php -->


@section('titulo')
    detalle barbero
@endsection

@section('content') 
	<h1> Usuario #{{ $user->id }}</h1>

    <p>Nombre del usuario: {{$user -> name}}</p>
    <p>Correo electronico: {{$user -> email}}</p>
    <p>Nombre del usuario: {{$user -> created_at}}</p>

    <h2><a href="{{ url()->previous() }}">Regresar</a></h2>
@endsection
