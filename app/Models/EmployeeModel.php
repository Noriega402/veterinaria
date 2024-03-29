<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
	// protected $DBGroup              = 'default';
	protected $table                = 'empleado';
	protected $primaryKey           = 'id_empleado';
	protected $useAutoIncrement     = true;
	protected $insertID             = 0;

	//en caso de que no funcione, cambiar a object en vez de array
	protected $returnType           = 'array';
	protected $useSoftDeletes       = false;
	protected $protectFields        = true;
	protected $allowedFields        = ['nombre', 'apellido', 'direccion'];

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

	public function getEmployee()
	{
		$query = $this->db->query('SELECT *FROM empleado');
		return $query->getResult();
	}

	public function insertEmployee($data)
	{
		$employee = $this->db->table('empleado');
		$employee->insert($data);

		// return $this->db->insertID();
	}

	#Para inicio de sesion
	public function getEmployeeBy(string $column,  string $value)
	{
		// $this->db->table('empleado');
		return $this->where($column, $value)->first();
	}

	#Para obtener Id para frm_update
	public function getEmpleoyeeById($id){
		$employee = $this->db->table('empleado')->where('id_empleado',$id);
		return $employee->get()->getResultObject();
	}

	#Actualizar el registro
	public function updateEmployee($data){
		$employee = $this->db->table('empleado');
		$employee->set('nombre',$data['nombre']);
		$employee->set('apellido',$data['apellido']);
		$employee->set('direccion',$data['direccion']);
		$employee->where('id_empleado',$data['id_empleado']);

		return $employee->update();
	}

	public function deleteEmployee($id){
		$employee = $this->db->table('empleado')->where('id_empleado',$id);
		return $employee->delete();
	}
}
