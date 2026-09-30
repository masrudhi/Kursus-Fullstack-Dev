<?php
namespace App\Models;
use CodeIgniter\Model;
class LaguModel extends Model {
	protected $table = 'lagu';
	protected $primaryKey ='no';
	protected $useAutoIncrement = false;
	protected $allowedFields = 
	['no','judul','pencipta','asal_negara',
	'tahun_rilis','jumlah_terjual'];
}