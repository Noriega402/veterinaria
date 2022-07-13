<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Calendar extends BaseController
{
	public function index()
	{
		// if(!session()->is_logged){
		// 	return redirect()->route('ingresar');
		// }
		$data = ['titulo' => 'Calendario de Trabajo'];
		$vistas = view('calendar/header', $data).
				view('admin/menu').
				view('calendar/index').
				view('calendar/footer');
		return $vistas;
	}
}
