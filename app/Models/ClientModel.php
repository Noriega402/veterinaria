<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientModel extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'cliente';
	protected $primaryKey           = 'id_cliente';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nombre','apellido','direccion','telefono'];

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

	public function getClients(){
		$client = $this->db->query("SELECT c.id_cliente AS id, c.nombre, c.apellido, c.direccion, c.telefono,
		CASE
			WHEN c.telefono = 0
			THEN 'S/N'
		END AS 'notificacion'
		FROM cliente AS c;");

		return $client->getResult();
	}

	public function insertClient($data){
		$client = $this->db->table('cliente');
		$client->insert($data);

		#RETORNAR EL ULTIMO ID QUE SE REALIZO EN LA BASE DE DATOS
		// return $this->db->insertID();
	}

	public function getClientId($data){
		$search = $this->db->table('cliente')->where('id_cliente',$data);

		return $search->get()->getResultObject();
	}

	public function updateClient($data){
		$clientUpdate = $this->db->table('cliente');
		$clientUpdate->set('nombre',$data['nombre']);
		$clientUpdate->set('apellido',$data['apellido']);
		$clientUpdate->set('direccion',$data['direccion']);
		$clientUpdate->set('telefono',$data['telefono']);
		$clientUpdate->where('id_cliente',$data['id_cliente']);

		return $clientUpdate->update();
	}

	public function deleteClient($data){
		$clientDelete = $this->db->table('cliente');
		$clientDelete->where('id_cliente', $data);

		return $clientDelete->delete();
	}

}