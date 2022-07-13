<?php

namespace App\Models;

use CodeIgniter\Model;

class RolModel extends Model
{
	// protected $DBGroup              = 'default';
	protected $table                = 'rol';
	protected $primaryKey           = 'id_rol';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = [];

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

	public function getRol(){
		$rol = $this->db->query('SELECT rol.descripcion FROM rol');
		return $rol->getResult();
	}

	public function getAllRol(){
		$roles = $this->db->query('SELECT *FROM rol');
		return $roles->getResult();
	}

	public function insertRol($data){
		$rol = $this->db->table('rol');
		$rol->insert($data);
		// return $rol;
		return $this->db->insertID();
	}

	public function getRolBy(string $value){
		$query = $this->db->query("SELECT usuario.nick, rol.descripcion
		FROM usuario
		INNER JOIN asig_usuario_rol ON usuario.id_usuario = asig_usuario_rol.usuario
		INNER JOIN rol ON asig_usuario_rol.rol = rol.id_rol
		WHERE usuario.nick = '$value'");

		return $query->getResult();
	}

	public function getRolFilter(string $value){
		return $this->where('descripcion', $value)->first();
	}
}
