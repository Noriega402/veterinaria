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
		$sesionUpdate = session()->update;
		$sesionDelete = session()->delete;

		$employee = $modelEmployee->asObject()->getEmployee();
		$rol = $modelRol->asObject()->getAllRol();
		$user = $modelUser->getUsers();

		$response = [
			'employee' => $employee,
			'rol' => $rol,
			'user' => $user,
			'correcto' => $sesion,
			'editado' => $sesionUpdate,
			'borrado' => $sesionDelete,
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

		$users = new UserModel();

		$user = $users->insertUser($datosUser);
		$assignment = $users->asig_user_rol($user,$datoRol);

		$msg = "¡Usuario creado con exito!";
		return redirect()->back()->with('success', $msg);
	}

	public function getUser($id){
		$users = new UserModel();
		$employees = new EmployeeModel();
		$rols = new RolModel();

		$data = ['titulo' => 'Actualizar Usuario'];

		$request = ['id_usuario' => $id];

		$user = $users->getUserById($request);
		$employee = $employees->getEmployee();
		$rol = $rols->getAllRol();

		$getEmployee = $user[0]->empleado;
		// $getRol =  $user[0]->rol;
		// dd($rol);

		$dataEmployee = $employees->getEmpleoyeeById($getEmployee);

		$response = [
			'usuario' => $user,
			'empleado' => $employee,
			'roles' => $rol,
			'dataEmpleado' => $dataEmployee,
		];
		// dd($user[0]);

		$vistas = view('User/header', $data) .
			view('Admin/menu') .
			view('User/frm_update', $response) .
			view('User/footer');

		return $vistas;
	}

	public function update()
	{
		$users = new UserModel();
		$rols = new RolModel();

		$idEmpleado = $this->request->getPost('empleado');
		$idUsuario = $this->request->getPost('usuario');
		$idRol = $this->request->getPost('rol');
		$nick = $this->request->getPost('nick');
		$password = $this->request->getPost('password');

		$encrypt = password_hash($password,PASSWORD_DEFAULT);
		// dd($encrypt);

		$datosUsuario = [
			'usuario' => $idUsuario,
			'empleado' => $idEmpleado,
			'nick' => $nick,
			'password' => $encrypt,
		];

		$datosAsig = [
			'usuario' => $idUsuario,
			'rol' => $idRol,
		];

		$validation = \Config\Services::validation();
		$validation->run($datosUsuario, 'user');
		$validation->setRuleGroup('user');

		if(!$validation->withRequest($this->request)->run()){
			// dd($validation->getErrors()); para ver errores
			return redirect()->back()->withInput()->with('error', $validation->getErrors());
		}

		$updateAsig = $rols->updateAsig($datosAsig['usuario'], $datosAsig['rol']);
		$updateUser  = $users->updateUser($datosUsuario);
		// dd($updateUser);
		// dd($updateAsig);

		$msg = "Usuario actualizado con exito!";
		return redirect('user')->with('update', $msg);
	}

	public function delete($id){
		$usuario = new UserModel();
		$datos = ['id_usuario' => $id];
		$delete = $usuario->deleteUser($datos);
		// dd($delete);
		$msg = "Usuario eliminado!";
		return redirect()->back()->with('delete', $msg);
	}
}