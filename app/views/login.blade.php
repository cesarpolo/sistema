<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- build:css(.) styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css(.tmp) styles/main.css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->
    <!-- Google Font: 'Roboto Slab' -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
    <!-- Font Awesome -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  </head>
    </head>
    <body ng-app="sistemaApp">
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active" data-toggle="modal" data-target="#signin"><a href="#signin">Iniciar Sesión</a></li>
          
            <!-- Modal -->
            <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title" id="myModalLabel">Sign In</h4>
                  </div>
                  <div class="modal-body">
                    {{ Form::open(array('url' => '/login')) }}
                        <br>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-envelope"></i></div>
                            {{ Form::text('email', Input::old('Email'), array('class'=>'form-control', 'placeholder'=>'Correo electrónico', 'required')); }}
                      </div>
                        <br>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-asterisk"></i></div>
                          {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Contraseña', 'required')); }}
                      </div>
                        <br>
                      <div class="input-group">
                          {{ HTML::link('/recovery', '¿Olvidaste tu contraseña?', array('id'=>'closemodal'))}}
                      </div>
                  
                  <div class="modal-footer">
                    {{ Form::submit('Enviar', array('class' => 'btn btn-primary')) }}
                  </div>
                  {{ Form::close() }}
                  </div>
                </div>
              </div>
            </div>
            
        </ul>
        <h3 class="text-muted"><img src="assets/images/escudo.png"> Colegio Los Arcos</h3>
      </div>
       <div class="message">
         <h3>
            @if(Session::has('mensaje_error'))
                {{ Session::get('mensaje_error') }}
            @endif 
        </h3>
       </div>      

        <div class="footer">
        <p><span><i class="fa fa-copyright"></i></span> 2014</p>
      </div>
    </div>

      </div>


                    
        <!-- Script de AngularJS -->
        {{HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js')}}
        <!-- Script de jQuery -->
        {{HTML::script('https://code.jquery.com/jquery-1.11.0.min.js')}}

<!-- build:js({.tmp,app}) scripts/scripts.js -->
        <script src="assets/scripts/app.js"></script>
        <script src="assets/js/bootstrap.js"></script>
        <!-- endbuild -->
      
      <script>
        $('#closemodal').click(function() {
        $('#signin').modal('hide');
});
      </script>

    </body>
</html>