<?php
namespace App\Models;
use CodeIgniter\Model;
class MovieModel extends Model {
	protected $table = 'movie';
	protected $primaryKey ='rank';
	protected $allowedFields = 
	['rank','movie_title','release_year','worldwide_gross',
	'director','genre'];
}