<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Panel extends BaseController
{
	public function index()
	{
		#Si el usuario no esta logueado, redirecciona a la pagina de login.
		if(!session()->is_logged){
			return redirect()->route('ingresar');
		}
		#En caso de que este logueado, traer los datos de session desde la funcion de Register (Controllers\Auth\Register.php -> funcion signin)
		$sesion = session()->welcome;
		$mensaje = ['saludar' => $sesion];
		// dd($sesion);
		$data = ['titulo' => 'Dashboard',];
		$vistas = view('admin/header', $data).
		view('admin/menu').
		view('admin/index', $mensaje).
		view('admin/footer');

		return $vistas;
	}
}
