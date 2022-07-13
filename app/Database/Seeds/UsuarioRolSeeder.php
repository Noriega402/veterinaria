<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioRolSeeder extends Seeder
{
	public function run()
	{
		$data = [
			'usuario' => 4,
			'rol' => 4,
		];

		// Simple Queries
		$this->db->query("INSERT INTO asig_usuario_rol (usuario, rol) VALUES(:usuario:, :rol:)", $data);
	}
}
