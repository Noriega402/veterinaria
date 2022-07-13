<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ClientModel;
use App\Models\EmployeeModel;

class Employee extends BaseController
{
	public function index()
	{
		// if(!session()->is_logged){
		// 	return redirect()->route('ingresar');
		// }

		$employees = new EmployeeModel();
		$employee = $employees->getEmployee();
		// dd($employee);

		$sesion = session()->success;

		$data = [ 'titulo' => 'Empleados'];
		$response = [
			'correcto' => $sesion,
			'empleados' => $employee,
		];
		$vistas = view ('Employee/header', $data).
				view('Admin/menu').
				view('Employee/index',$response).
				view('Employee/footer');
		return $vistas;
	}

	public function insertEmployee(){
		$datosEmpleado = [
			'nombre' => $this->request->getPost('nombre'),
			'apellido' => $this->request->getPost('apellido'),
			'direccion' => $this->request->getPost('direccion'),
		];
		// dd($datosEmpleado);

		$employee = new EmployeeModel();
		$employee->insertEmployee($datosEmpleado);

		$msg = "¡Empleado agregado con exito!";
		return redirect()->back()->with('success',$msg);
	}
}
