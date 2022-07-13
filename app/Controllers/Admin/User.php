<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EmployeeModel;
use App\Models\RolModel;
use App\Models\UserModel;

class User extends BaseController
{
	public function index()
	{
		$modelEmployee = new EmployeeModel();
		$modelRol = new RolModel();
		$modelUser = new UserModel();

		$sesion = session()->success;

		$employee = $modelEmployee->asObject()->getEmployee();
		$rol = $modelRol->asObject()->getAllRol();
		$user = $modelUser->getUsers();

		$response = [
			'employee' => $employee,
			'rol' => $rol,
			'user' => $user,
			'correcto' => $sesion,
		];
		// dd($response);
		// var_dump($response['employee'][1]);
		$data = ['titulo' => 'Usuarios'];
		$vista = view('User/header',$data).
				view('Admin/menu').
				view('User/index', $response).
				view('User/footer');
		return $vista;
	}

	public function insertUser(){
		$datosUser = [
			'empleado' => $this->request->getPost('id_empleado'),
			'nick' => $this->request->getPost('nick'),
			'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
		];

		// dd(password_hash($datosUser['password'],PASSWORD_DEFAULT));

		$datoRol = [
			'rol' => $this->request->getPost('id_rol'),
		];

		$validation = \Config\Services::validation();
		$validation->run($datosUser, 'user');
		$validation->setRuleGroup('user');

		if(!$validation->withRequest($this->request)->run()){
			// dd($validation->getErrors());
			return redirect()->back()->withInput()->with('error',$validation->getErrors());
		}
		# empleado, nick y password = table empleado
		# rol = table rol
		# asignar el rol y el usuario = table asig_usuario_rol

		$users = new UserModel();

		$user = $users->insertUser($datosUser);
		$assignment = $users->asig_user_rol($user,$datoRol);

		$msg = "¡Usuario creado con exito!";
		return redirect()->back()->with('success', $msg);
	}
}
