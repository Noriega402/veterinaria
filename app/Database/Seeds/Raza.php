<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Raza extends Seeder
{
	public function run()
	{

		$v1 = [
			'nombre_raza' => 'Bulldog',
			'tipo' => 1,
		];
		$v2 = [
			'nombre_raza' => 'Pug',
			'tipo' => 1,
		];
		$v3 = [
			'nombre_raza' => 'Chow Chow',
			'tipo' => 1,
		];
		$v4 = [
			'nombre_raza' => 'Pastor Aleman',
			'tipo' => 1,
		];
		$v5 = [
			'nombre_raza' => 'Pomerania',
			'tipo' => 1,
		];
		$v6 = [
			'nombre_raza' => 'Golden Retriever',
			'tipo' => 1,
		];
		$v7 = [
			'nombre_raza' => 'Labrador Retriever',
			'tipo' => 1,
		];
		$v8 = [
			'nombre_raza' => 'Bull Terrier',
			'tipo' => 1,
		];
		$v9 = [
			'nombre_raza' => 'Dalmata',
			'tipo' => 1,
		];
		$v10 = [
			'nombre_raza' => 'Pekines',
			'tipo' => 1,
		];
		$v11 = [
			'nombre_raza' => 'Cocker',
			'tipo' => 1,
		];
		$v12 = [
			'nombre_raza' => 'Galgo ingles',
			'tipo' => 1,
		];
		$v13 = [
			'nombre_raza' => 'Bulldog frances',
			'tipo' => 1,
		];
		$v14 = [
			'nombre_raza' => 'Mini toy',
			'tipo' => 1,
		];
		$v15 = [
			'nombre_raza' => 'Shiba Inu',
			'tipo' => 1,
		];
		$v16 = [
			'nombre_raza' => 'Basset hound',
			'tipo' => 1,
		];
		$v17 = [
			'nombre_raza' => 'Persa',
			'tipo' => 2,
		];
		$v18 = [
			'nombre_raza' => 'Bengala',
			'tipo' => 2,
		];
		$v19 = [
			'nombre_raza' => 'Esfinge',
			'tipo' => 2,
		];
		$v20 = [
			'nombre_raza' => 'Maine Coon',
			'tipo' => 2,
		];
		$v21 = [
			'nombre_raza' => 'Americano',
			'tipo' => 2,
		];
		$v22 = [
			'nombre_raza' => 'Siberiano',
			'tipo' => 2,
		];
		$v23 = [
			'nombre_raza' => 'Himalayo',
			'tipo' => 2,
		];
		$v24 = [
			'nombre_raza' => 'Fold escoces',
			'tipo' => 2,
		];
		$v25 = [
			'nombre_raza' => 'Ruso',
			'tipo' => 2,
		];
		$v26 = [
			'nombre_raza' => 'Roborowski',
			'tipo' => 3,
		];
		$v27 = [
			'nombre_raza' => 'Chino',
			'tipo' => 3,
		];
		$v28 = [
			'nombre_raza' => 'Dorado',
			'tipo' => 3,
		];
		$v29 = [
			'nombre_raza' => 'Enano de campbell',
			'tipo' => 3,
		];
		$v30 = [
			'nombre_raza' => 'Periquito malva',
			'tipo' => 13,
		];
		$v31 = [
			'nombre_raza' => 'Periquito violeta',
			'tipo' => 13,
		];
		$v32 = [
			'nombre_raza' => 'Periquito azul oscuro',
			'tipo' => 13,
		];
		$v33 = [
			'nombre_raza' => 'Tortuga mediterranea',
			'tipo' => 4,
		];
		$v34 = [
			'nombre_raza' => 'Tortuga de orejas rojas',
			'tipo' => 4,
		];
		$v35 = [
			'nombre_raza' => 'Tortuga Laud',
			'tipo' => 4,
		];
		$v36 = [
			'nombre_raza' => 'Tortuga Rusa',
			'tipo' => 4,
		];
		$v37 = [
			'nombre_raza' => 'Tortuga de orejas amarillas',
			'tipo' => 4,
		];
		$v38 = [
			'nombre_raza' => 'Tortuga mapa del norte',
			'tipo' => 4,
		];
		$v39 = [
			'nombre_raza' => 'Cerdo comun',
			'tipo' => 8,
		];
		$v40 = [
			'nombre_raza' => 'Caballo comun',
			'tipo' => 6,
		];
		$v41 = [
			'nombre_raza' => 'Serpiente cascabel',
			'tipo' => 12,
		];
		$v42 = [
			'nombre_raza' => 'Serpiente Amarilla',
			'tipo' => 12,
		];
		$v43 = [
			'nombre_raza' => 'Serpiente Real',
			'tipo' => 12,
		];
		$v44 = [
			'nombre_raza' => 'Otras serpientes',
			'tipo' => 12,
		];
		$v45 = [
			'nombre_raza' => 'Aguila',
			'tipo' => 13,
		];
		$v46 = [
			'nombre_raza' => 'Halcon',
			'tipo' => 13,
		];
		$v47 = [
			'nombre_raza' => 'Pichon de alas rojas',
			'tipo' => 13,
		];
		$v48 = [
			'nombre_raza' => 'Paloma',
			'tipo' => 13,
		];
		$v49 = [
			'nombre_raza' => 'Erizo comun',
			'tipo' => 14,
		];
		$v50 = [
			'nombre_raza' => 'Gallina blanca',
			'tipo' => 15,
		];


		$this->db->table('raza')->insert($v1);
		$this->db->table('raza')->insert($v2);
		$this->db->table('raza')->insert($v3);
		$this->db->table('raza')->insert($v4);
		$this->db->table('raza')->insert($v5);
		$this->db->table('raza')->insert($v6);
		$this->db->table('raza')->insert($v7);
		$this->db->table('raza')->insert($v8);
		$this->db->table('raza')->insert($v9);
		$this->db->table('raza')->insert($v10);
		$this->db->table('raza')->insert($v11);
		$this->db->table('raza')->insert($v12);
		$this->db->table('raza')->insert($v13);
		$this->db->table('raza')->insert($v14);
		$this->db->table('raza')->insert($v15);
		$this->db->table('raza')->insert($v16);
		$this->db->table('raza')->insert($v17);
		$this->db->table('raza')->insert($v18);
		$this->db->table('raza')->insert($v19);
		$this->db->table('raza')->insert($v20);
		$this->db->table('raza')->insert($v21);
		$this->db->table('raza')->insert($v22);
		$this->db->table('raza')->insert($v23);
		$this->db->table('raza')->insert($v24);
		$this->db->table('raza')->insert($v25);
		$this->db->table('raza')->insert($v26);
		$this->db->table('raza')->insert($v27);
		$this->db->table('raza')->insert($v28);
		$this->db->table('raza')->insert($v29);
		$this->db->table('raza')->insert($v30);
		$this->db->table('raza')->insert($v31);
		$this->db->table('raza')->insert($v31);
		$this->db->table('raza')->insert($v32);
		$this->db->table('raza')->insert($v33);
		$this->db->table('raza')->insert($v34);
		$this->db->table('raza')->insert($v35);
		$this->db->table('raza')->insert($v36);
		$this->db->table('raza')->insert($v37);
		$this->db->table('raza')->insert($v38);
		$this->db->table('raza')->insert($v39);
		$this->db->table('raza')->insert($v40);
		$this->db->table('raza')->insert($v41);
		$this->db->table('raza')->insert($v42);
		$this->db->table('raza')->insert($v43);
		$this->db->table('raza')->insert($v44);
		$this->db->table('raza')->insert($v45);
		$this->db->table('raza')->insert($v46);
		$this->db->table('raza')->insert($v47);
		$this->db->table('raza')->insert($v48);
		$this->db->table('raza')->insert($v49);
		$this->db->table('raza')->insert($v50);

	}
}
