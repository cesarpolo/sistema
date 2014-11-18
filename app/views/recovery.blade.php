@extends('layouts.master')

@section('title')
	Recuperar contraseña
@stop


@section('content')
	{{ Form::open(array('url' => '/recovery')) }}
        {{ Form::label('email', 'Email') }}
        {{ Form::text('email', Input::old('Email')); }}
        {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
        @if(Session::has('error'))
            {{ Session::get('error') }}
        @endif
        @if(Session::has('status'))
            {{ Session::get('status') }}
        @endif
    {{ Form::close() }}
@stop