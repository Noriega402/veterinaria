<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
	// protected $DBGroup              = 'default';
	protected $table                = 'usuario';
	protected $primaryKey           = 'id_usuario';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['empleado', 'nick', 'password'];

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
	protected $afterInsert          = [];
	protected $beforeUpdate         = [];
	protected $afterUpdate          = [];
	protected $beforeFind           = [];
	protected $afterFind            = [];
	protected $beforeDelete         = [];
	protected $afterDelete          = [];

	protected $id_empleado;
	protected $id_usuario;

	public function getUsers()
	{
		$user = $this->db->query('SELECT u.id_usuario AS id, u.nick,
								CONCAT(e.nombre," ",e.apellido) AS nombre_completo,
								r.descripcion AS rol
							FROM usuario AS u
							INNER JOIN empleado AS e ON e.id_empleado = u.empleado
							INNER JOIN asig_usuario_rol AS a ON a.usuario = u.id_usuario
							INNER JOIN rol AS r ON r.id_rol = a.rol;');

		return $user->getResult();
	}

	public function user_rol($idUser)
	{
		$defaultRol = 4;
		// $asignation = $db->query('INSERT INTO asig_usuario_rol(usuario,rol) VALUES($idUser, 4)');
		$asignation = $this->db->table('asig_usuario_rol')
			->insert([
				'usuario' => $idUser,
				'rol' => $defaultRol
			]);

		// return $this->db->insertID();
	}

	public function getUserBy(string $column, string $value)
	{
		// busca nombre de la columna a la cual vamos a accder
		// posteriormente encontrar el nick
		return $this->where($column, $value)->first();
	}

	public function insertUser($data)
	{
		$user = $this->db->table('usuario');
		$user->insert($data);

		return $this->db->insertID();
	}

	public function asig_user_rol($idUser, $idRol){
		$assignment = $this->db->table('asig_usuario_rol');
		$assignment->insert([
			'usuario' => $idUser,
			'rol' => $idRol,
		]);
	}

	public function getUserById($id){
		$user = $this->db->table('usuario')->where('id_usuario',$id);

		return $user->get()->getResultObject();
	}
}
