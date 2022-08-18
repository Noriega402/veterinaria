<?php

namespace App\Controllers\Invitado;

use App\Controllers\BaseController;

class Ubication extends BaseController
{
	public function index()
	{
		$data = ['titulo' => 'Visitanos'];
		$vistas = view('Invitado/header', $data).
				view('Invitado/menu').
				view('Invitado/mapa').
				view('Invitado/footer');
		return $vistas;
	}
}
