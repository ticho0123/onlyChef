<?php

namespace App\Controllers;

$session = \Config\Services::session();

class Page extends BaseController
{
	public function index()
	{
		return view('index');
	}

	public function view($page = 'index'){
		$data['title'] = ucfirst($page);
		echo view('template/header',$data);
		echo view('/Pages/'.$page,$data);
		echo view('template/footer',$data);
	}
}
