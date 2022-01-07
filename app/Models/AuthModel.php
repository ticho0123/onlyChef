<?php

namespace App\Models;

use CodeIgniter\Model;

class AuthModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['nama_depan', 'nama_belakang', 'username', 'password', 'id_role'];
}