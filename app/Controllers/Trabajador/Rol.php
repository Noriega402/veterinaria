<?php

namespace App\Controllers\Trabajador;

use App\Controllers\BaseController;
use App\Models\RolModel;

class Rol extends BaseController
{
	public function mostrarRoles(){
		$model = new RolModel();
		d($model->getRol());
		// print_r($model->getRol());
		// echo $model->getRol();
	}
	public function crear()
	{
		$data = [
			'descripcion' => 'invitado'
		];

		$model = new RolModel();
		echo $model->insertRol($data);
		// d($model->insertRol($data));
	}
}
