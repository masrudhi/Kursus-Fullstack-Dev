<?php  
namespace App\Controllers;
use App\Models\LandmarkModel;

class Landmark extends BaseController{

protected $landmark;
public function __construct()
{$this->landmark = new LandmarkModel();}

public function index(){
	$model = new LandmarkModel();
	$urutan = $this->request->getPost('urutan');
	$pencarian = $this->request->getPost('pencarian');
	
	if($pencarian!=''){
		$model->groupStart()
			  ->like('no',$pencarian)
			  ->orLike('kota',$pencarian)
			  ->orLike('negara',$pencarian)
			  ->orLike('landmark',$pencarian)
			  ->orLike('populasi',$pencarian)
			  ->groupEnd();	
	}

	if($urutan=='no_asc')
		{$model->orderBy('no','asc');}
	else if($urutan=='no_desc')
		{$model->orderBy('no','desc');}

	else if($urutan=='kota_asc')
		{$model->orderBy('kota','asc');}
	else if($urutan=='kota_desc')
		{$model->orderBy('kota','desc');}

	else if($urutan=='negara_asc')
		{$model->orderBy('negara','asc');}
	else if($urutan=='negara_desc')
		{$model->orderBy('negara','desc');}

	else if($urutan=='landmark_asc')
		{$model->orderBy('landmark','asc');}
	else if($urutan=='landmark_desc')
		{$model->orderBy('landmark','desc');}

	else if($urutan=='populasi_asc')
		{$model->orderBy('populasi','asc');}
	else if($urutan=='populasi_desc')
		{$model->orderBy('populasi','desc');}
	

	$data['landmark'] = $model->paginate(4);//jumlah baris  halaman
	$data['pager'] = $model->pager;
	$data['pencarian'] = $pencarian;
	return view('landmark', $data);

	}


public function add()
{
    return view('CreateLandmark');
}

public function store()
{
    $this->landmark->insert([
        'no' => $this->request->getPost('no'),
        'kota' => $this->request->getVar('kota'),
        'negara' => $this->request->getVar('negara'),
        'landmark' => $this->request->getVar('landmark'),
        'populasi' => $this->request->getVar('populasi')
    ]);
    return redirect()->to(base_url('Landmark/index'));
}

public function update($no){
    $data['landmark_Edit'] = $this->landmark
        ->getWhere(['no' => $no])
        ->getRow();
    return view('UpdateLandmark', $data);
}

public function updateSimpan(){
    $data = [
        'kota' => $this->request->getVar('kota'),
        'negara' => $this->request->getVar('negara'),
        'landmark' => $this->request->getVar('landmark'),
        'populasi' => $this->request->getVar('populasi')
    ];
    $no = $this->request->getPost('no');
    $this->landmark->update($no, $data);
    return redirect()->to(base_url('Landmark/index'));
}


}