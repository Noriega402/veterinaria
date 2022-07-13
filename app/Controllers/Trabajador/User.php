<?php

namespace App\Controllers\Trabajador;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;

class User extends BaseController
{
	public function index()
	{
		$password = password_hash('andres123', PASSWORD_DEFAULT);
		$data = [
			'nick' => 'Andres123',
			'password' => $password
		];

	}
}
