<?php
namespace App\Models;
use CodeIgniter\Model;
class BookModel extends Model {
	protected $table = 'book';
	protected $primaryKey ='book_id';
	protected $allowedFields = 
	['book_id','title','genre','published_year',
	'first_name','last_name','nationality','birth_year',
	'sold_million'];
}