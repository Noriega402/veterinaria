<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TipoAnimal extends Seeder
{
	public function run()
	{
		$data = [
			'tipo' => 'Gallina'
		];

		$this->db->table('tipo_animal')->insert($data);
	}
}
