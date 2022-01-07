<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentModel extends Model
{
    protected $table = 'comment';

    protected $allowedFields = ['id_user', 'id_article', 'komentar'];
}