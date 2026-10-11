<?php
namespace App\Models;
use CodeIgniter\Model;

class LoginModel extends Model {
	protected $table = 'login';
	protected $primaryKey ='username';
	protected $returnType = 'object';
	protected $allowedFields = 
	['username', 'password'];
}