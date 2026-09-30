<?php
namespace App\Controllers;
use App\Models\MovieModel;
class Movie extends BaseController{
	protected $movie;
	
	public function __construct()
	{$this->movie = new MovieModel();}


	public function index(){
		$model = new MovieModel();
		$urutan = $this->request->getPost('urutan');
		$pencarian = $this->request->getPost('pencarian');
		if ($pencarian!=''){
			$model->groupStart()
			->like('rank',$pencarian)
			->orlike('movie_title',$pencarian)
			->orlike('release_year',$pencarian)
			->orlike('worldwide_gross',$pencarian)
			->orlike('director',$pencarian)
			->orlike('genre',$pencarian)
			->groupEnd();
		}
	if($urutan=='rank_asc')
		{$model->orderBy('rank','asc');}
	else if($urutan=='rank_desc')
		{$model->orderBy('rank','desc');}

	else if($urutan=='movie_title_asc')
		{$model->orderBy('movie_title','asc');}
	else if($urutan=='movie_title_desc')
		{$model->orderBy('movie_title','desc');}

	else if($urutan=='release_year_asc')
		{$model->orderBy('release_year','asc');}
	else if($urutan=='release_year_desc')
		{$model->orderBy('release_year','desc');}

	else if($urutan=='worldwide_gross_asc')
		{$model->orderBy('worldwide_gross','asc');}
	else if($urutan=='worldwide_gross_desc')
		{$model->orderBy('worldwide_gross','desc');}

	else if($urutan=='director_asc')
		{$model->orderBy('director','asc');}
	else if($urutan=='director_desc')
		{$model->orderBy('director','desc');}

	else if($urutan=='genre_asc')
		{$model->orderBy('genre','asc');}
	else if($urutan=='genre_desc')
		{$model->orderBy('genre','desc');}	

	$data['movie'] = $model->findAll();
	$data['pencarian'] = $pencarian;
	return view('movie',$data);

	}

	public function add() {
    return view('CreateMovie');
    }

	
	public function store(){
		$this->movie->insert(
			['rank'=>$this->request->getPost('rank'),
			 'movie_title'=>$this->request->getVar('movie_title'),
			 'release_year'=>$this->request->getVar('release_year'),
			 'worldwide_gross'=>$this->request->getVar('worldwide_gross'),	
			 'director'=>$this->request->getVar('director'),
			 'genre'=>$this->request->getVar('genre')
			]
			);
	 	return redirect()->to(base_url('Movie/index'));
	}

	public function update($rank){
		$data['movie_edit'] = $this->movie->
		getWhere(['rank'=>$rank])->getRow();
		return view('UpdateMovie', $data);
	}
	public function updateSimpan(){
		$data = [
			'movie_title'=>$this->request->getVar('movie_title'),
			'release_year'=>$this->request->getVar('release_year'),
			'worldwide_gross'=>$this->request->getVar('worldwide_gross'),
			'director'=>$this->request->getVar('director'),
			'genre'=>$this->request->getVar('genre')
		];

		$rank = $this->request->getPost('rank');
		$this->movie->update($rank,$data);
		return redirect()->to(base_url('Movie/index'));
	}
	public function delete($rank){
		$this->movie->where('rank', $rank);
		$this->movie->delete($rank);
		return redirect()->to(base_url('Movie/index'));
	}

}
