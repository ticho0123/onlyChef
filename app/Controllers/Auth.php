<?php

namespace App\Controllers;

use App\Models\AuthModel;
use CodeIgniter\Controller;

$GLOBALS['session'] = \Config\Services::session();

class Auth extends BaseController
{
	public function sign_up()
	{
		$model = new AuthModel();

		if ($this->request->getMethod() === 'post' && $this->validate([
            'nama_depan' => 'required'
	        ]))
	    {
	    	$username = $this->request->getPost('username');
	    	$password = $this->request->getPost('password');

	    	$user = $model->getWhere(['username' => $username])->getRow();

	    	if($user){
	    		$this->session->setFlashdata('error', 'Username already taken');
	    		return redirect()->to('login');
	    	}else{    		

		        $model->save([
		            'nama_depan' => $this->request->getPost('nama_depan'),
		            'nama_belakang'  => $this->request->getPost('nama_belakang'),
		            'username'  => $this->request->getPost('username'),
		            'password'  => password_hash($password, PASSWORD_DEFAULT),
		            'id_role'  => 3,
		        ]);
		        $this->session->setFlashdata('message', 'Please Login');
		        return redirect()->to('login');
	    	}
	    }
	    else
	    {
	        return redirect()->to('login');
	    }
	}

	public function login()
	{
		$model = new AuthModel();

		if ($this->request->getMethod() === 'post' && $this->validate([
            'username' => 'required'
	        ])){

	    	$username = $this->request->getPost('username');
	    	$password = $this->request->getPost('password');

	    	$user = $model->getWhere(['username' => $username])->getRow();

	    	if($user){

	    		$id_role = $user->id_role;
	    		$nama_depan = $user->nama_depan;

	    		if(password_verify($password, $user->password)){
	    			$session = [
					        'username'  => $username,
					        'nama_depan'  => $nama_depan,
					        'id_role'     => $id_role,
					        'id_user'     => $user->id,
					        'logged_in' => TRUE
					];
					session()->set($session);
					if($id_role == '1'){
						return redirect()->to('konfirmasi-pembayaran');
					}else{
						return redirect()->to('indexuser');
					}
					
				}else{
					$this->session->setFlashdata('error', 'Username or password wrong');
	        		return redirect()->to('login');
				}
	    	}
	    }else{
	    	$this->session->setFlashdata('error', 'Username or password wrong');
	        return redirect()->to('login');
	    }
	}

	public function logout(){
		session()->destroy();
		$this->session->setFlashdata('message', 'Logout succesfully');
		return redirect()->to('login');
	}

}
