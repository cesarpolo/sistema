<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{HTML::style('/../public/assets/bootstrap/css/bootstrap.min.css')}}
    </head>
    <body>
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
            {{ Session::get('mensaje_error') }}
        @endif        
                        {{ Form::open(array('url' => '/login')) }}
                        {{ Form::label('email', 'Email', array('class'=>'col-lg-2')) }}
                        {{ Form::text('email', Input::old('Email'), array('class'=>'col-lg-10')); }}
                        {{ Form::label('contraseña', 'Contraseña', array('class'=>'col-lg-2')) }}
                        {{ Form::password('password', array('class'=>'col-lg-10')); }}
                        {{ Form::label('lblRememberme', 'Recordar contraseña') }}
                        {{ Form::checkbox('rememberme', true) }}
                        {{ HTML::link('/recovery', 'Olvidaste tu contraseña?')}}
                        {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
        <!-- Script de AngularJS -->
        {{HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js')}}
        <!-- Script de jQuery -->
        {{HTML::script('https://code.jquery.com/jquery-1.11.0.min.js')}}
        <!-- Script de Bootsrap JS -->
        {{HTML::script('/../public/assets/bootstrap/js/bootstrap.min.js')}}
    </body>
</html>