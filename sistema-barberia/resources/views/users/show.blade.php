@extends('layout') <!-- extiende de blade layout.blade.php -->


@section('titulo')
    detalle barbero
@endsection

@section('content') 
	<h1> Usuario #{{ $user->id }}</h1>

    <p>Nombre del usuario: {{$user -> name}}</p>
    <p>Correo electronico: {{$user -> email}}</p>
    <p>Nombre del usuario: {{$user -> created_at}}</p>

    <h2><a href="{{ route('users.index')}}">Regresar a listado usuarios</a></h2>
@endsection
