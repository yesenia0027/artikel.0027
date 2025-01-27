<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $allowedFields = ['username', 'password','nama_pengguna', 'telp_pengguna','email_pengguna', 'level_pengguna'];
    protected $useTimestamps = false;

    public function getUsersByLevel($level)
    {
        return $this->where('level_pengguna', $level)->findAll();
    }
}