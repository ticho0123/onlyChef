<?php

namespace App\Models;

use CodeIgniter\Model;

class LikesModel extends Model
{
    protected $table = 'likes';

    protected $allowedFields = ['id_user', 'id_article'];
}