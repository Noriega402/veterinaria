<?php

namespace App\Controllers\trabajador;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;
use App\Models\UserModel;

class Employee extends BaseController
{
	public function index()
	{
		$datos = [
			'nombre' => 'Andres',
			'apellido' => 'Ferreira',
			'direccion' => 'Calles de Bogota'
		];

		$model = new EmployeeModel();
		$lastId = $model->insertEmployee($datos);
		// echo $lastId;

		$password = password_hash('andres123', PASSWORD_DEFAULT);
		$data = [
			'empleado' => $lastId,
			'nick' => 'Andres123',
			'password' => $password,
		];
		$usuario = new UserModel();
		// $usuario->insertUser($data);
		$lastIdUser = $usuario->insertUser($data);
		$usuario_rol = new UserModel();
		$usuario_rol->user_rol($lastIdUser);
	}
}
