<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Controllers\Trabajador\Rol;
use App\Models\EmployeeModel;
use App\Models\RolModel;
use App\Models\UserModel;

// use App\Config\Validation;

class Register extends BaseController
{
	public function registro(){
		$titulo = ['titulo' => 'Registrate'];
		$vistas = view('Auth/header', $titulo) .
			view('Auth/signup') .
			view('Auth/footer');

		return $vistas;
	}

	public function ingresar()
	{
		$titulo = ['titulo' => 'Login'];

		$vistas = view('Auth/header', $titulo) .
			view('Auth/signin') .
			view('Auth/footer');

		return $vistas;
	}

	#Registrarse en el sistema
	public function signup(){
		$data = [
			'nick' => $this->request->getPost('nick'),
			'password' => $this->request->getPost('password'),
		];

		#LLAMAR A LA VALIDACION DE REGLAS DE LOS INPUTS
		$validation = \Config\Services::validation();
		$validation->run($data, 'signup');
		$validation->setRuleGroup('signup');

		#Si los datos son incorrectos o hay algun error, redireccionar
		if (!$validation->withRequest($this->request)->run()) {
			// dd($validation->getErrors());
			return redirect()->back()->withInput()->with('errores', $validation->getErrors());
		}else {
			echo "Validos"; #Si  no hay problema, se insertan los datos
		}
	}

	#INGRESO AL SISTEMA SI YA SE TIENE UNA CUENTA
	public function signin(){
		// d($_POST);
		$data = [
			'nick' => $this->request->getPost('nick'),
			'password' => $this->request->getPost('password'),
		];

		#LLAMAR VALIDACION PARA CAMPOS DE INICIO DE SESION
		$validation = \Config\Services::validation();
		#Correr la validacion de la regla
		$validation->run($data,'signin');
		$validation->setRuleGroup('signin');

		// dd($validation);

		#Si alguno de los valores es incorrecto redireccionar y mostrar mensaje de error.
		if (!$validation->withRequest($this->request)->run()) {
			return redirect()->back()->withInput()->with('errores', $validation->getErrors());
		}

		$user = new UserModel();

		if(!$usuario = $user->getUserBy('nick', $data['nick'])){
			return redirect()->back()->with('message',
				['error' => 'Error en las credenciales']
			);
		}

		if(!password_verify($data['password'], $usuario['password'])){
			return redirect()->back()->with('message',
				['error' => 'Contraseña incorrecta']
			);
		}

		$empleado = new EmployeeModel();
		$buscarEmpleado = $empleado->asObject()->getEmployeeBy('id_empleado', $usuario['empleado']);
		// dd($buscarEmpleado);

		// Ver como objeto
		$buscarUsuario = $user->asObject()->getUserBy('nick', $data['nick']);
		// dd($buscarUsuario->nick);

		$rol = new RolModel();
		$buscarRol = $rol->asObject()->getRolBy($buscarUsuario->nick);
		// dd($buscarRol[0]->descripcion);
		session()->set([
			'id_user' => $buscarUsuario->id_usuario,
			'nick' => $buscarUsuario->nick,
			'nombre' => $buscarEmpleado->nombre,
			'apellido' => $buscarEmpleado->apellido,
			'rol' => $buscarRol[0]->descripcion,
			'is_logged' => true
		]);
		if(session()->rol === 'Admin'){
			// redirecciona por medio del alias, en este caso es admin
			return redirect()->route('dashboard')->with('welcome',session()->nombre);
		}elseif(session()->rol === 'Veterinario'){
			return redirect()->route('veterinario')->with('welcome',session()->nombre);
		}else{
			// redirecciona por medio del alias, que es invitados (en las rutas)
			return redirect()->route('invitados')->with('welcome', session()->nombre);
		}
	}

	public function logout(){
		session()->destroy();
		return redirect()->route('ingresar');
	}

}
