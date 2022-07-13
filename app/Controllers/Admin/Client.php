<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ClientModel;
use App\Models\EmployeeModel;

class Client extends BaseController
{
	public function index()
	{

		#Obtener todos los clientes de la DB
		$cliente = new ClientModel();
		$request = $cliente->getClients();

		#Variable $sesion solo se activa cuando se inserta un cliente de lo contrario no se aparece nada en pantalla, se manda como variable 'correcto' al index en donde hya un script que toma el valor de la sesion para mostrar el mensaje de alerta.
		$sesion = session()->success; #esta session viene de insertClient
		$sesionUpdate = session()->update; #esta session viene de update
		$sesionDelete = session()->delete;
		$response = [
			'correcto' => $sesion,
			'actualizado' => $sesionUpdate,
			'borrado' => $sesionDelete,
			'cliente' => $request,
		];

		$data = ['titulo' => 'Clientes'];

		$vistas = view('Client/header', $data) .
			view('Admin/menu') .
			view('Client/index', $response) .
			view('Client/footer');
		return $vistas;
	}

	public function insertClient()
	{
		// print_r($_POST);
		$datosCliente = [
			'nombre' => $this->request->getPost('nombre'),
			'apellido' => $this->request->getPost('apellido'),
			'direccion' => $this->request->getPost('direccion'),
			'telefono' => $this->request->getPost('telefono'),
		];

		#Correr la libreria de los servicios de validation para poder verificar si los inputs cumplen con los requisitos establecidos en las configuraciones
		$validation = \Config\Services::validation();
		$validation->run($datosCliente, 'client');
		$validation->setRuleGroup('client');

		#En caso de que no cumpla la validacion, mandara un mensaje de los errores y con los inputs rellenados de la informacion que se habia enviado.
		#El if devuelve false si algo no se cumple y entra a redireccionar.
		if (!$validation->withRequest($this->request)->run()) {
			// dd($validation->getErrors());
			return redirect()->back()->withInput()->with('error', $validation->getErrors());
		}

		$cliente = new ClientModel();

		$cliente->insertClient($datosCliente);

		#Redireccionar a la pagina de ingresar clientes con un mensaje de sesion (se dirige a la funcion index)
		$msg = 'Cliente agregado con exito';
		return redirect()->back()->with('success', $msg);
	}

	public function getClient($id)
	{
		$client = new ClientModel();

		$data = ['titulo' => 'Actualizar Cliente'];
		$request = ['id_cliente' => $id];

		$cliente = $client->getClientId($request);

		$response = ['client' => $cliente];
		// dd($cliente[0]->nombre);

		$vistas = view('Client/header', $data) .
			view('Admin/menu') .
			view('Client/frm_update', $response) .
			view('Client/footer');

		return $vistas;
	}

	public function update()
	{
		$datos = [
			'id_cliente' => $this->request->getPost('id'),
			'nombre' => $this->request->getPost('nombre'),
			'apellido' => $this->request->getPost('apellido'),
			'direccion' => $this->request->getPost('direccion'),
			'telefono' => $this->request->getPost('telefono'),
		];

		$validation = \Config\Services::validation();
		$validation->run($datos, 'client');
		$validation->setRuleGroup('client');

		if(!$validation->withRequest($this->request)->run()){
			// dd($validation->getErrors());
			return redirect()->back()->withInput()->with('error', $validation->getErrors());
		}

		$cliente = new ClientModel();
		$update  = $cliente->updateClient($datos);
		// dd($update);
		$msg = "¡Cliente actualizado con exito!";
		return redirect('client')->with('update', $msg);
	}

	public function delete($id){
		$datos = ['id_cliente' => $id];
		$cliente = new ClientModel();
		$delete = $cliente->deleteClient($datos);
		// dd($delete);
		$msg = "Cliente borrado";
		return redirect()->back()->with('delete', $msg);
	}
}
