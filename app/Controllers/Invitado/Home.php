<?php

namespace App\Controllers\Invitado;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		if(!session()->is_logged){
			return redirect()->route('ingresar');
		}

		$sesion = session()->welcome;
		$data  = ['titulo' => 'Invitado'];
		$mensaje = ['saludar' => $sesion];
		$vistas = view('Invitado/header', $data).
				view('Invitado/menu').
				view('Invitado/index', $mensaje).
				view('Invitado/footer');

		return $vistas;
	}
}
