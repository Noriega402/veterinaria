<?php

namespace App\Controllers\Invitado;

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

		#valores de inputs
		$raza = $razas->getRazas();
		$sexo = $razas->getSexo();
		$lista = $cliente->getClients();
		#Valores para tabla
		$mascota = $mascotas->getPets();
		// dd($mascota[2]->nombre);

		$response = [
			'raza' => $raza,
			'sexo' => $sexo,
			'cliente' => $lista,
			'mascotas' => $mascota,
		];
		// dd($response);
		// dd($response[0]->nombre_raza);
		$data =  ['titulo' => 'Mascotas'];
		$vistas = view('Mascotas/header', $data).
				view('Invitado/menu').
				view('Mascotas/index_restrict', $response).
				view('Mascotas/footer');
		return $vistas;
	}
}
