<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ClientModel;
use App\Models\PetModel;
use App\Models\Raza;

class Pet extends BaseController
{
	public function index(){
		$razas = new Raza();
		$mascotas = new PetModel();
		$cliente = new ClientModel();

		$sesion = session()->success;
		$sesionUpdate = session()->update;

		#valores de inputs
		$raza = $razas->getRazas();
		$sexo = $razas->getSexo();
		$lista = $cliente->getClients();
		#Valores para tabla
		$mascota = $mascotas->getPets();
		// dd($mascota[2]->nombre);

		$response = [
			'correcto' => $sesion,
			'actualizado' => $sesionUpdate,
			'raza' => $raza,
			'sexo' => $sexo,
			'cliente' => $lista,
			'mascotas' => $mascota,
		];
		// dd($response);
		// dd($response[0]->nombre_raza);
		$data =  ['titulo' => 'Mascotas'];
		$vistas = view('Mascotas/header', $data).
				view('admin/menu').
				view('Mascotas/index', $response).
				view('Mascotas/footer');
		return $vistas;
	}

	public function insertPet(){

		$datosMascota = [
			'nombre_mascota' => $this->request->getPost('nombre'),
			'cliente' => $this->request->getPost('cliente'),
			'raza' => $this->request->getPost('raza'),
			'sexo' => $this->request->getPost('sexo'),
			'f_nacimiento' => $this->request->getPost('f_nacimiento'),
			'peso' => $this->request->getPost('peso'),
			'color' => $this->request->getPost('color'),
		];

		$validation = \Config\Services::validation();
		$validation->run($datosMascota, 'pet');
		$validation->setRuleGroup('pet');

		#Devuelve un false y da los mensajes de error sobre que falto y redireciona la vista
		if(!$validation->withRequest($this->request)->run()){
			// dd($validation->getErrors());
			return redirect()->back()->withInput()->with('error', $validation->getErrors());
		}

		$model = new PetModel();

		$model->insertPet($datosMascota);
		// dd($datosMascota);

		$msg = '¡Mascota agregada con exito!';
		return redirect()->back()->with('success', $msg);
	}

	public function getPet($id){
		$pets = new PetModel();
		$razas = new Raza();
		$clients = new ClientModel();

		$data = ['titulo' => 'Actualizar Mascota'];
		$request = ['id_mascota' => $id,];

		$pet = $pets->getPetId($request);
		$client = $clients->getClients();

		// dd($pet[0]->raza);
		// dd($pet);
		$idRaza = $pet[0]->raza;
		$getClient = $pet[0]->cliente;
		$raza = $razas->getRazaById($idRaza);
		$dataClient = $clients->getClientId($getClient);
		// dd($raza[0]->nombre_raza);

		$response = [
			'pet' => $pet,
			'raza' => $raza,
			'dataClient' => $dataClient,
			'allClient' => $client,
		];

		$vistas = view('Mascotas/header', $data) .
			view('Admin/menu') .
			view('Mascotas/frm_update', $response) .
			view('Mascotas/footer');

		return $vistas;
	}

	public function update(){
		$datos = [
			'id_mascota' => $this->request->getPost('id'),
			'nombre' => $this->request->getPost('nombre'),
			'f_nacimiento' => $this->request->getPost('f_nacimiento'),
			'peso' => $this->request->getPost('peso'),
			'color' => $this->request->getPost('color'),
			'cliente' => $this->request->getPost('cliente'),
		];

		$validation = \Config\Services::validation();
		$validation->run($datos, 'updatePet');
		$validation->setRuleGroup('updatePet');

		if(!$validation->withRequest($this->request)->run()){
			// dd($validation->getErrors());
			return redirect()->back()->withInput()->with('error', $validation->getErrors());
		}

		$mascota = new PetModel();
		$update  = $mascota->updatePet($datos);
		// dd($update);
		$msg = "¡Datos de la mascota actualizado con exito!";
		return redirect('pets')->with('update', $msg);
	}

	// public function delete($id){
	// 	$datos = ['id_cliente' => $id];
	// 	$cliente = new ClientModel();
	// 	$delete = $cliente->deleteClient($datos);
	// 	// dd($delete);
	// 	$msg = "Cliente borrado";
	// 	return redirect()->back()->with('delete', $msg);
	// }
}
