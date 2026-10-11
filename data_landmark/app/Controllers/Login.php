<?php  
namespace App\Controllers;
use App\Models\LoginModel;

class Login extends BaseController{
public function index()
{return view('Tampil_Login');}
public function login(){
	$login = new LoginModel();
	$username = $this->request->getVar('username');
	$password = $this->request->getVar('password');
	$dataUser = $login->where(['username'=>$username, 'password'=>$password])->
	first();
	if($dataUser){
		session()->set(['username'=>$dataUser->username,'logged_in'=>TRUE]);
		return redirect()->to(base_url('Landmark/index'));
	}
	else
		{return redirect()->to(base_url('?username/password salah'));}

}
public function logout(){
	session()->destroy();
	return redirect()->to(base_url());
}
}

