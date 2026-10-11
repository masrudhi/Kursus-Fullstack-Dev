<?php
namespace App\Models;
use CodeIgniter\Model;

class LandmarkModel extends Model
{
    protected $table = 'data_landmark';
    protected $primaryKey = 'no';

    protected $allowedFields = [
        'no',
        'kota',
        'negara',
        'landmark',
        'populasi'
    ];
}