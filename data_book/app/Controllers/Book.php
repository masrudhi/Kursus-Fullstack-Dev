<?php  
namespace App\Controllers;
use App\Models\BookModel;
class Book extends BaseController{
public function index(){
	$model = new BookModel();
	$urutan = $this->request->getPost('urutan');
	if($urutan=='book_id_asc')
            $model->orderBy('book_id', 'asc');
        elseif($urutan=='book_id_desc')
            $model->orderBy('book_id', 'desc');

        elseif($urutan=='title_asc')
            $model->orderBy('title', 'asc');
        elseif($urutan=="title_desc")
            $model->orderBy('title', 'desc');

        elseif($urutan=='genre_asc')
            $model->orderBy('genre', 'asc');
        elseif($urutan=='genre_desc')
            $model->orderBy('genre', 'desc');

        elseif($urutan=='published_year_asc')
            $model->orderBy('published_year', 'asc');
        elseif($urutan=='published_year_desc')
            $model->orderBy('published_year', 'desc');

        elseif($urutan=='first_name_asc')
            $model->orderBy('first_name', 'asc');
        elseif($urutan=='first_name_desc')
            $model->orderBy('first_name', 'desc');

        elseif($urutan=='last_name_asc')
            $model->orderBy('last_name', 'asc');
        elseif($urutan=='last_name_desc')
            $model->orderBy('last_name', 'desc');

        elseif($urutan=='nationality_asc')
            $model->orderBy('nationality', 'asc');
        elseif($urutan=='nationality_desc')
            $model->orderBy('nationality', 'desc');

        elseif($urutan=='birth_year_asc')
            $model->orderBy('birth_year', 'asc');
        elseif($urutan=='birth_year_desc')
            $model->orderBy('birth_year', 'desc');

        elseif($urutan=='sold_million_asc')
            $model->orderBy('sold_million', 'asc');
        elseif($urutan=='sold_million_desc')
            $model->orderBy('sold_million', 'desc');
        $data['book'] = $model->findAll();
        return view('book', $data);
}}