@extends('layout') <!-- extiende de blade layout.blade.php -->


@section('titulo')
    detalle barbero
@endsection

@section('content') 
	<h1> Usuario #{{ $id }}</h1>

    Mostrando detalles del usuario: {{ $id }}
@endsection
