<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Sexo extends Seeder
{
	public function run()
	{
		$data = [
			'nombre_sexo' => 'Macho'
		];

		$this->db->table('sexo')->insert($data);
	}
}
