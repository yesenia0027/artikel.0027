<?php

namespace App\Models;

use CodeIgniter\Model;

class Mujiansiswa extends Model
{
    protected $table = 'ujian_siswa';       // Nama tabel di database
    protected $primaryKey = 'id_ujian_siswa'; // Primary key tabel
    protected $allowedFields = [
        'id_ujian_siswa',
        'id_ujian', 
        'nis', 
        'skor', 
        'status',
        'tgl_ujian',
        'wkt_ujian',
        'keterangan',
    ]; // Kolom yang diizinkan untuk diisi

    // Fungsi untuk mengambil semua data pengguna
    public function getUjianSiswa()
    {
        return $this->findAll();
    }
}
