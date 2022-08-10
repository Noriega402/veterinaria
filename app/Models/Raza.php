<?php

namespace App\Models;

use CodeIgniter\Model;

class Raza extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'raza';
	protected $primaryKey           = 'id_raza';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nombre_raza'];

	// Dates
	protected $useTimestamps        = false;
	protected $dateFormat           = 'datetime';
	/* protected $createdField         = 'created_at';
	protected $updatedField         = 'updated_at';
	protected $deletedField         = 'deleted_at'; */

	// Validation
	protected $validationRules      = [];
	protected $validationMessages   = [];
	protected $skipValidation       = false;
	protected $cleanValidationRules = true;

	// Callbacks
	protected $allowCallbacks       = true;
	protected $beforeInsert         = [];
	protected $afterInsert     	     = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	public function getRazas(){
		$query = $this->db->query("SELECT* FROM raza");
		return $query->getResult();
	}

	public function getSexo(){
		$query = $this->db->query("SELECT* FROM sexo");
		return $query->getResult();
	}

	public function getRazaById($id){
		$getRaza = $this->db->table('raza')->where('id_raza', $id);
		return $getRaza->get()->getResultObject();
	}
}
