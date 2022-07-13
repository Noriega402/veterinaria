<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsuarioSeeder extends Seeder
{
	public function run()
	{
		// $password = password_hash('noriega2002$', PASSWORD_DEFAULT);
		// $password = password_hash('melany123', PASSWORD_DEFAULT);
		// $password = password_hash('noriega123', PASSWORD_DEFAULT);
		$password = password_hash('invitado', PASSWORD_DEFAULT);
		$data = [
			'empleado' => 1,
			'nick' => 'invitado',
			'password' => $password
		];

		// Simple Queries
		$this->db->query("INSERT INTO usuario (empleado, nick, password) VALUES(:empleado:, :nick:,:password:)", $data);
	}
}
