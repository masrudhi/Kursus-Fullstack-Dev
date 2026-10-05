<?php  
namespace App\Controllers;
use App\Models\MobilModel;
class Mobil extends BaseController{
protected $mobil;
public function __construct()
{$this->mobil = new MobilModel();}

public function index(){
	$model = new MobilModel();
	$pencarian = $this->request->getPost('pencarian');
	$urutan 	 = $this->request->getPost('urutan');
	if($pencarian!=''){
		$model->groupStart()
			  ->like('rank',$pencarian)
			  ->orLike('merek_mobil',$pencarian)
			  ->orLike('model_mobil',$pencarian)
			  ->orLike('harga',$pencarian)
			  ->orLike('jumlah_penjualan',$pencarian)
			  ->groupEnd();	
	}
	if($urutan=='rank_asc')
		{$model->orderBy('rank','asc');}
	else if($urutan=='rank_desc')
		{$model->orderBy('rank','desc');}

	else if($urutan=='merek_mobil_asc')
		{$model->orderBy('merek_mobil','asc');}
	else if($urutan=='merek_mobil_desc')
		{$model->orderBy('merek_mobil','desc');}

	else if($urutan=='model_mobil_asc')
		{$model->orderBy('model_mobil','asc');}
	else if($urutan=='model_mobil_desc')
		{$model->orderBy('model_mobil','desc');}

	else if($urutan=='harga_asc')
		{$model->orderBy('harga','asc');}
	else if($urutan=='harga_desc')
		{$model->orderBy('harga','desc');}

	else if($urutan=='jumlah_penjualan_asc')
		{$model->orderBy('jumlah_penjualan','asc');}
	else if($urutan=='jumlah_penjualan_desc')
		{$model->orderBy('jumlah_penjualan','desc');}
	

	$data['mobil'] = $model->findAll();
	$data['pencarian'] = $pencarian;
	return view('mobil', $data);

	}


public function add()
{
    return view('CreateMobil');
}

public function store(){
    $file = $this->request->getFile('gambar');
    if(!$file || !$file->isValid() || $file->hasMoved()){
        return redirect()->back()->with('error','Gambar gagal diupload');
    }
    if(!in_array($file->getMimeType(),
        ['image/jpeg','image/png','image/gif','image/webp'])){
        return redirect()->back()->with('error','Format gambar tidak valid');
    }
    $namaGambar = $file->getRandomName();
    $folder = FCPATH.'gambar/';
    if(!is_dir($folder)){
        mkdir($folder,0777,true);
    }
    $file->move($folder,$namaGambar);
    $this->mobil->insert([
        'rank'=>$this->request->getPost('rank'),
        'merek_mobil'=>$this->request->getPost('merek_mobil'),
        'model_mobil'=>$this->request->getPost('model_mobil'),
        'harga'=>$this->request->getPost('harga'),
        'jumlah_penjualan'=>$this->request->getPost('jumlah_penjualan'),
        'gambar'=>$namaGambar
    ]);
    return redirect()->to(base_url('Mobil/index'));
}
public function update($rank){
    $data['mobil_Edit'] = $this->mobil->find($rank);
    return view('UpdateMobil',$data);
}

public function updateSimpan(){
    $rank = $this->request->getPost('rank');
    $data = [
        'merek_mobil'=>$this->request->getPost('merek_mobil'),
        'model_mobil'=>$this->request->getPost('model_mobil'),
        'harga'=>$this->request->getPost('harga'),
        'jumlah_penjualan'=>$this->request->getPost('jumlah_penjualan')
    ];
    $file = $this->request->getFile('gambar');
    if($file && $file->getError()!=4){
        if(!$file->isValid() || $file->hasMoved()){
            return redirect()->back()->with('error','Gambar gagal diupload');
        }
        if(!in_array($file->getMimeType(),
            ['image/jpeg','image/png','image/gif','image/webp'])){
            return redirect()->back()->with('error','Format gambar tidak valid');
        }
        $namaGambar = $file->getRandomName();
        $folder = FCPATH.'gambar/';
        if(!is_dir($folder)){
            mkdir($folder,0777,true);
        }
        $file->move($folder,$namaGambar);
        $lama = $this->mobil->find($rank);
        if($lama && !empty($lama['gambar'])){
            $pathLama = $folder.$lama['gambar'];

            if(is_file($pathLama)){
                unlink($pathLama);
            }
        }
        $data['gambar'] = $namaGambar;
    }
    $this->mobil->update($rank,$data);
    return redirect()->to(base_url('Mobil/index'));
 } 

Public function delete($rank){
	$lama = $this->mobil->find($rank);
	if($lama && !empty($lama['gambar'])){
		$path = FCPATH. 'gambar/'.$lama['gambar'];
		if(is_file($path))
			{unlink($path);}
	}
	$this->mobil->delete($rank);
	return redirect()->to(base_url('Mobil/index'));
}

}