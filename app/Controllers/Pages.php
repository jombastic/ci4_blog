<?php

namespace App\Controllers;

use App\Models\Blog_model;

class Pages extends BaseController
{
	public function index()
	{
		$model = new Blog_model();
		$data['news'] = $model->getPosts();

		echo view('templates/header', $data);
		echo view('pages/home');
		echo view('templates/footer');
	}

	public function showme($page = 'home') {
		if (! is_file(APPPATH.'/Views/pages/'.$page.'.php')) {
			throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}

		echo view('templates/header');
		echo view('pages/'.$page);
		echo view('templates/footer');
	}
}
