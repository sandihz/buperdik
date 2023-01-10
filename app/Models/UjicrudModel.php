<?php
// ADEL CODEIGNITER 4 CRUD GENERATOR

namespace App\Models;
use CodeIgniter\Model;

class UjicrudModel extends Model {
    
	protected $table = 'ujicrud';
	protected $primaryKey = 'id';
	protected $returnType = 'object';
	protected $useSoftDeletes = false;
	protected $allowedFields = ['nama', 'alamat', 'tanggal'];
	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';
	protected $validationRules    = [];
	protected $validationMessages = [];
	protected $skipValidation     = true;    
	
}