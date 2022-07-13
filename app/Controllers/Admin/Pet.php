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

		#valores de inputs
		$raza = $razas->getRazas();
		$sexo = $razas->getSexo();
		$lista = $cliente->getClients();
		#Valores para tabla
		$mascota = $mascotas->getPets();
		// dd($mascota[2]->nombre);

		$response = [
			'correcto' => $sesion,
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
}
