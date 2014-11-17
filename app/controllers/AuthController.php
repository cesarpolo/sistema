<?php

class AuthController extends BaseController {

	public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            Return View:: make ('home');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login');
    }

        
    public function postLogin()
    {
        $userdata= array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        if (Auth::attempt($userdata)) {

            # code...
            return Redirect::intended('home');
        }
        else
        {
            Return Redirect::to('login')->with('mensaje_error', 'Tus datos son incorrectos');
        }
    }

    public function logOut()
    {
        Auth::logout();
        Return Redirect::to('login')->with('mensaje_error', 'Gracias por su Visita');
    }
    
}