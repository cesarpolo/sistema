@extends('layouts.master')

@section('title')
	Perfil de Usuario
@stop


@section('content')
	<h2>Datos de la Cuenta</h2>
	<p>Nombre de Usuario: {{ Auth::user()->name; }}</p>
	<p>Contraseña:</p>
@stop