<?php

namespace App\Controllers\Inicio;

use App\Controllers\BaseController;

class Home extends BaseController
{
	public function index()
	{
		$data = ['titulo' => 'Veterinaria Noriega'];
		$vistas = view('principal/header', $data).
		view('principal/menu').
		view('principal/index').
		view('principal/footer');

		return $vistas;
	}
}
