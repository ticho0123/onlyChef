<?php

namespace App\Controllers;

use App\Models\ArticleModel;
use App\Models\CommentModel;
use App\Models\LikesModel;
use App\Models\AuthModel;
use CodeIgniter\Controller;

class Article extends BaseController
{
	public function create()
	{
		$model = new ArticleModel();

		if ($this->request->getMethod() === 'post'){

	    	$validated = $this->validate([
            	'file' => 'uploaded[file]|mime_in[file,image/jpg,image/jpeg,image/gif,image/png]|max_size[file,4096]'
        	]);

	        if(!$validated){
	        	return redirect()->to('artikelbaru');
	        }else{
	        	$img = $this->request->getFile('file');

	            $img->move(ROOTPATH . 'public/uploads');
	    		
	    		$file_name = $img->getName();

	            $model->save([
		            'judul' => $this->request->getPost('judul'),
		            'slug'  => url_title($this->request->getPost('judul'), '-', true),
		            'kategori' => $this->request->getPost('kategori'),
		            'isi' => $this->request->getPost('isi'),
		            'file_name' => $file_name,
		            'id_user' => session()->get('id_user'),
		        ]);
	    
	            $this->session->setFlashdata('message', 'Artikel berhasil ditambah');
		        return redirect()->to('artikel');
	        }	
	    }else{
	        return redirect()->to('artikelbaru');
	    }    
	}

	public function list()
	{
		$model = new ArticleModel();
		$authModel = new AuthModel();
		$likeModel = new LikesModel();

		$data['articles'] = $model->query('SELECT *, date(tgl) as tanggal FROM articles, users WHERE articles.id_user = users.id')->getResult();

		$data['title'] = 'Artikel';

		// chart
		$data['users'] = $authModel->query("SELECT users.nama_depan FROM likes, articles, users WHERE likes.id_article = articles.id AND articles.id_user = users.id GROUP BY articles.id_user")->getResultArray();

		// likes
		$data['likes'] = $authModel->query("SELECT COUNT(likes.id_user) AS total_likes FROM likes, articles, users WHERE likes.id_article = articles.id AND articles.id_user = users.id GROUP BY articles.id_user")->getResultArray();


		echo view('template/header',$data);
		echo view('/Pages/artikel',$data);
		echo view('template/footer',$data);   
	}

	public function detail($slug)
	{
		$model = new ArticleModel();
		$commentModel = new CommentModel();
		$likeModel = new LikesModel();

		$article = $model->getWhere(['slug' => $slug])->getRow();

		$data['article'] = $model->query("SELECT *, date(tgl) as tanggal, articles.id as id_article FROM articles, users WHERE articles.id_user = users.id AND articles.slug = '$slug'")->getRow();

		$data['comments'] = $commentModel->query("SELECT * FROM comment, articles, users WHERE comment.id_article = $article->id AND comment.id_user = users.id GROUP BY comment.id")->getResult();

		$data['likes'] = $likeModel->query("SELECT * From likes WHERE id_article = $article->id")->getResult();

		$data['slug'] = $slug;

		$data['title'] = 'Artikel';

		echo view('template/header',$data);
		echo view('/Pages/artikel_detail',$data);
		echo view('template/footer',$data);   
	}

	public function comment($id)
	{
		$articleModel = new ArticleModel();
		$model = new CommentModel();

		$article = $articleModel->find($id);

		if ($this->request->getMethod() === 'post'){

            $model->save([
	            'id_user' => session()->get('id_user'),
	            'id_article' => $id,
	            'komentar' => $this->request->getPost('komentar'),
	        ]);
    
	        return redirect()->to('artikel/'. $article['slug']);
	        	
	    }else{
	        return redirect()->to('artikelbaru');
	    }    
	}

	public function like($id)
	{
		$id_user = session()->get('id_user');

		$model = new LikesModel();

		$check = $model->query("SELECT * From likes WHERE id_article = $id AND id_user = $id_user")->getRow();

		if($check){
			$model->query("DELETE From likes WHERE id_article = $id AND id_user = $id_user");

			echo 'sukses dislike';
		}else{
			$model->save([
	            'id_user' => session()->get('id_user'),
	            'id_article' => $id
	        ]);

	        echo 'sukses like';
		}		   
	}
}
