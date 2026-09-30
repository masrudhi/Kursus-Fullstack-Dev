<?php  
namespace App\Controllers;
use App\Models\LaguModel;
class Lagu extends BaseController{
protected $lagu;
public function __construct()
{$this->lagu = new LaguModel();}	
public function index(){
	$model = new LaguModel();
	$pencarian 	= $this->request->getPost('pencarian');
	$urutan 	= $this->request->getPost('urutan');
	if($pencarian!=''){
		$model->groupStart()
			  ->like('judul',$pencarian)
			  ->orLike('pencipta',$pencarian)
			  ->orLike('asal_negara',$pencarian)
			  ->orLike('tahun_rilis',$pencarian)
			  ->orLike('jumlah_terjual',$pencarian)
			  ->groupEnd();	
	}
	if($urutan=='no_asc')
		{$model->orderBy('no','asc');}
	else if($urutan=='no_desc')
		{$model->orderBy('no','desc');}

	else if($urutan=='judul_asc')
		{$model->orderBy('judul','asc');}
	else if($urutan=='judul_desc')
		{$model->orderBy('judul','desc');}

	else if($urutan=='pencipta_asc')
		{$model->orderBy('pencipta','asc');}
	else if($urutan=='pencipta_desc')
		{$model->orderBy('pencipta','desc');}

	else if($urutan=='asal_negara_asc')
		{$model->orderBy('asal_negara','asc');}
	else if($urutan=='asal_negara_desc')
		{$model->orderBy('asal_negara','desc');}

	else if($urutan=='tahun_rilis_asc')
		{$model->orderBy('tahun_rilis','asc');}
	else if($urutan=='tahun_rilis_desc')
		{$model->orderBy('tahun_rilis','desc');}

	else if($urutan=='jumlah_terjual_asc')
		{$model->orderBy('jumlah_terjual','asc');}
	else if($urutan=='jumlah_terjual_desc')
		{$model->orderBy('jumlah_terjual','desc');}

	$data['lagu'] = $model->findAll();
	$data['pencarian'] = $pencarian;
	return view('lagu', $data);

	}


   public function add() {
        return view('TambahLagu');
    }

	
	public function store(){
		$this->lagu->insert(
			['no'=>$this->request->getPost('no'),
			 'judul'=>$this->request->getVar('judul'),
			 'pencipta'=>$this->request->getVar('pencipta'),
			 'asal_negara'=>$this->request->getVar('asal_negara'),	
			 'tahun_rilis'=>$this->request->getVar('tahun_rilis'),
			 'jumlah_terjual'=>$this->request->getVar('jumlah_terjual')
			]
			);
	 	return redirect()->to(base_url('Lagu/index'));
	}
}