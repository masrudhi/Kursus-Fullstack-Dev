<?php
namespace App\Models;
use CodeIgniter\Model;

class LukisanModel extends Model
{
    protected $table = 'data_lukisan';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'lukisan',
        'seniman',
        'tahun_dibuat',
        'nilai_taksiran'
    ];
}