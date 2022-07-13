<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmpleadoSeeder extends Seeder
{
	public function run()
        {
                $data = [
                        'nombre' => 'Melany Andrea',
                        'apellido' => 'Salazar Cruz',
			'direccion' => 'Villas de Palin'
                ];

                // Simple Queries
                $this->db->query("INSERT INTO empleado (nombre, apellido, direccion) VALUES(:nombre:, :apellido:,:direccion:)", $data);

                // Using Query Builder
                // $this->db->table('empleado')->insert($data);
        }
}
