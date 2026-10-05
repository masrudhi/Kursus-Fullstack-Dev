<?php
namespace App\Models;
use CodeIgniter\Model;

class MobilModel extends Model {
	protected $table = 'mobil';
	protected $primaryKey ='rank';
	protected $allowedFields = 
	['rank','merek_mobil','model_mobil','harga',
	'jumlah_penjualan','gambar'];
}