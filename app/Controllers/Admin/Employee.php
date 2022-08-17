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
		$sesionUpdate = session()->update;

		$data = [ 'titulo' => 'Empleados'];
		$response = [
			'empleados' => $employee,
			'correcto' => $sesion,
			'editado' => $sesionUpdate,
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

	public function getEmployee($id){
		$employees = new EmployeeModel();

		$data = ['titulo' => 'Actualizar Empleado'];
		$request = ['id_empleado' => $id];

		$employee = $employees->getEmpleoyeeById($request);
		// dd($employee);
		$result = [
			'employee' => $employee,
		];

		$vistas = view('Employee/header', $data).
			view('Admin/menu').
			view('Employee/frm_update',$result).
			view('Employee/footer');

		return $vistas;
	}

	public function update(){
		$employees = new EmployeeModel();

		$data = [
			'id_empleado' => $this->request->getPost('id'),
			'nombre' => $this->request->getPost('nombre'),
			'apellido' => $this->request->getPost('apellido'),
			'direccion' => $this->request->getPost('direccion'),
		];

		$validation = \Config\Services::validation();
		$validation->run($data,'empleado');
		$validation->setRuleGroup('empleado');

		if(!$validation->withRequest($this->request)->run()){
			// dd($validation->getErrors());
			return redirect()->back()->withInput()->with('error',$validation->getErrors());
		}

		$employee = $employees->updateEmployee($data);

		$msg = "Datos de empleado actualizado con exito!";
		return redirect('employee')->with('update',$msg);
	}
}
