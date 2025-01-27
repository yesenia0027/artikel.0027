<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table = 'pengguna';       // Nama tabel di database
    protected $primaryKey = 'id_pengguna'; // Primary key tabel
    protected $allowedFields = [
        'username', 
        'nama_pengguna', 
        'telp_pengguna', 
        'email_pengguna', 
        'level_pengguna'
    ]; // Kolom yang diizinkan untuk diisi

    // Fungsi untuk mengambil semua data pengguna
    public function getPengguna()
    {
        return $this->findAll();
    }
}
