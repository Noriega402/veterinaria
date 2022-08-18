<?php

namespace App\Controllers\Invitado;

use App\Controllers\BaseController;

class Calendar extends BaseController
{
	public function index()
	{
		$data = ['titulo' => 'Calendario de Actividades'];
		$vistas = view('calendar/header', $data).
				view('Invitado/menu').
				view('calendar/index').
				view('calendar/footer');
		return $vistas;
	}
}
