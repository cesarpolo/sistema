<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        {{HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css')}}
    </head>
    <body>
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
            {{ Session::get('mensaje_error') }}
        @endif
        {{ Form::open(array('url' => '/login')) }}
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email', Input::old('Email')); }}
            {{ Form::label('contraseña', 'Contraseña') }}
            {{ Form::password('password'); }}
            {{ Form::label('lblRememberme', 'Recordar contraseña') }}
            {{ Form::checkbox('rememberme', true) }}
            {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
        {{ Form::close() }}


        <!-- Script de AngularJS -->
        {{HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js')}}

        <!-- Script de jQuery -->
        {{HTML::script('https://code.jquery.com/jquery-1.11.0.min.js')}}

        <!-- Script de Bootsrap JS -->
        {{HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js')}}


    </body>
</html>