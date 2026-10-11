<?php
namespace App\Controllers;
use App\Models\LukisanModel;

class Lukisan extends BaseController
{
    protected $lukisanModel;

    public function __construct()
    {
        $this->lukisanModel = new LukisanModel();
    }

    public function index()
    {
        $pencarian = $this->request->getVar('pencarian');
        $urutan = $this->request->getVar('urutan');

        $model = $this->lukisanModel;

        if ($pencarian) {
            $model->groupStart()
                  ->like('lukisan', $pencarian)
                  ->orLike('seniman', $pencarian)
                  ->groupEnd();
        }

        if ($urutan == 'lukisan_asc')
            $model->orderBy('lukisan', 'asc');
        else if ($urutan == 'lukisan_desc')
            $model->orderBy('lukisan', 'desc');
        else if ($urutan == 'seniman_asc')
            $model->orderBy('seniman', 'asc');
        else if ($urutan == 'seniman_desc')
            $model->orderBy('seniman', 'desc');
        else if ($urutan == 'tahun_asc')
            $model->orderBy('tahun_dibuat', 'asc');
        else if ($urutan == 'tahun_desc')
            $model->orderBy('tahun_dibuat', 'desc');
        else if ($urutan == 'nilai_asc')
            $model->orderBy('nilai_taksiran', 'asc');
        else if ($urutan == 'nilai_desc')
            $model->orderBy('nilai_taksiran', 'desc');

        $data['lukisan'] = $model->paginate(4);
        $data['pager'] = $model->pager;
        $data['pencarian'] = $pencarian;

        return view('lukisan_view', $data);
    }

    public function add()
    {
        return view('create_lukisan');
    }

    public function store()
    {
        $this->lukisanModel->insert([
            'lukisan' => $this->request->getVar('lukisan'),
            'seniman' => $this->request->getVar('seniman'),
            'tahun_dibuat' => $this->request->getVar('tahun_dibuat'),
            'nilai_taksiran' => $this->request->getVar('nilai_taksiran')
        ]);
        return redirect()->to(base_url('Lukisan'));
    }

    public function update($id)
    {
        $data['lukisan_Edit'] = $this->lukisanModel->getWhere(['id' => $id])->getRow();
        return view('update_lukisan', $data);
    }

    public function updateSimpan()
    {
        $id = $this->request->getPost('id');
        $data = [
            'lukisan' => $this->request->getVar('lukisan'),
            'seniman' => $this->request->getVar('seniman'),
            'tahun_dibuat' => $this->request->getVar('tahun_dibuat'),
            'nilai_taksiran' => $this->request->getVar('nilai_taksiran')
        ];
        $this->lukisanModel->update($id, $data);
        return redirect()->to(base_url('Lukisan'));
    }

    public function delete($id)
    {
        $this->lukisanModel->delete($id);
        return redirect()->to(base_url('Lukisan'));
    }
}