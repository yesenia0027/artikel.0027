<?php

namespace App\Models;

use CodeIgniter\Model;

class Mkelas extends Model
{
    protected $table = 'kelas';       // Nama tabel di database
    protected $primaryKey = 'id_kelas'; // Primary key tabel
    protected $allowedFields = [
        'id_kelas', 
        'nama_kelas', 
        'kelas', 
        'p_keahlian',
        'keterangan', 
    ]; // Kolom yang diizinkan untuk diisi

    // Fungsi untuk mengambil semua data pengguna
    public function getKelas()
    {
        return $this->findAll();
    }
}
