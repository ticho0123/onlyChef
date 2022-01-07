<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticleModel extends Model
{
    protected $table = 'articles';

    protected $allowedFields = ['judul', 'kategori', 'isi', 'id_user', 'file_name', 'slug'];
}