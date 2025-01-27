<?php

namespace App\Models;

use CodeIgniter\Model;

class Mmapel extends Model
{
    protected $table = 'mata_pelajaran';       // Nama tabel di database
    protected $primaryKey = 'id_mapel'; // Primary key tabel
    protected $allowedFields = [
        'id_mapel', 
        'nama_mapel', 
        'kelas', 
        'p_keahlian', 
    ]; // Kolom yang diizinkan untuk diisi

    // Fungsi untuk mengambil semua data pengguna
    public function getMapel()
    {
        return $this->findAll();
    }
}
