<?php

namespace App\Models;

use CodeIgniter\Model;

class PetModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'mascota';
	protected $primaryKey           = 'id_mascota';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nombre_mascota', 'cliente', 'animal', 'sexo', 'f_nacimiento', 'peso', 'color'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at';

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function getPets()
	{
		$pet = $this->db->query('SELECT
								m.id_mascota AS id,
								m.nombre_mascota AS nombre,
								r.nombre_raza AS raza,
								t.tipo,
								s.nombre_sexo AS sexo,
								m.f_nacimiento,
								m.peso,
								m.color
			FROM mascota AS m
			INNER JOIN raza AS r ON r.id_raza = m.raza
			INNER JOIN sexo AS s ON s.id_sexo = m.sexo
			INNER JOIN tipo_animal AS t ON t.id_tipo = r.tipo;');

		return $pet->getResult();
	}

	public function insertPet($data)
	{
		$pet = $this->db->table('mascota');
		$pet->insert($data);
	}

	public function getPetId($id){
		$search = $this->db->table('mascota')->where('id_mascota', $id);

		return $search->get()->getResultObject();
	}

	public function updatePet($data){
		$mascotaUpdate = $this->db->table('mascota');
		$mascotaUpdate->set('nombre_mascota',$data['nombre']);
		$mascotaUpdate->set('cliente',$data['cliente']);
		$mascotaUpdate->set('f_nacimiento',$data['f_nacimiento']);
		$mascotaUpdate->set('peso',$data['peso']);
		$mascotaUpdate->set('color',$data['color']);
		$mascotaUpdate->where('id_mascota',$data['id_mascota']);

		return $mascotaUpdate->update();
	}

	public function deletePet($id){
		$deletePet = $this->db->table('mascota');
		$deletePet->where('id_mascota',$id);

		return $deletePet->delete();
	}
}
