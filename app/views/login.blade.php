<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        {{HTML::style('/../public/assets/theme/css/bootstrap.min.css')}}
        {{HTML::style('/../public/assets/theme/css/plugins/metisMenu/metisMenu.min.css')}}
        {{HTML::style('/../public/assets/theme/css/sb-admin2.css')}}
    </head>
    <body>
        {{-- Preguntamos si hay algún mensaje de error y si hay lo mostramos  --}}
        @if(Session::has('mensaje_error'))
            {{ Session::get('mensaje_error') }}
        @endif
        
        <div class="container">
            
        <div class="row">

            <div class="col-lg-6"><h1>Sistema de Control de Estudios</h1></div>
            <div class="col-lg-6">
                <a data-toggle="modal" href="#myModal">Iniciar Sesión</a>
            </div>

        </div>

        

        <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                  <h4 class="modal-title">Iniciar Sesión</h4>
                </div>
                <div class="modal-body">

                    {{ Form::open(array('url' => '/login')) }}
                        <div class="form-group">
                        {{ Form::label('email', 'Email', array('class'=>'col-lg-2')) }}
                        {{ Form::text('email', Input::old('Email'), array('class'=>'col-lg-10')); }}
                        </div>
                        <div class="form-group">
                        {{ Form::label('contraseña', 'Contraseña', array('class'=>'col-lg-2')) }}
                        {{ Form::password('password', array('class'=>'col-lg-10')); }}
                        </div>
                        <div class="form-group">
                        {{ Form::label('lblRememberme', 'Recordar contraseña') }}
                        {{ Form::checkbox('rememberme', true) }}
                        </div>
                        {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                    {{ Form::close() }}
                </div>
                <div class="modal-footer">
                  <a href="#" data-dismiss="modal" class="btn">Close</a>
                  <a href="#" class="btn btn-primary">Save changes</a>
                </div>
              </div>
            </div>
        </div>

        </div>

        <!-- Script de AngularJS -->
        {{HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js')}}

        <!-- Script de jQuery -->
        {{HTML::script('https://code.jquery.com/jquery-1.11.0.min.js')}}

        <!-- Script de Bootsrap JS -->
        {{HTML::script('/../public/assets/bootstrap/js/bootstrap.min.js')}}


    </body>
</html>