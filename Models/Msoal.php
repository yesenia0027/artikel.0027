<?php

namespace App\Models;

use CodeIgniter\Model;

class Msoal extends Model
{
    protected $table = 'soal';       // Nama tabel di database
    protected $primaryKey = 'id_soal'; // Primary key tabel
    protected $allowedFields = [
        'id_soal',
        'id_kategori', 
        'soal', 
        'gambar_soal', 
        'pilihan_a',
        'pilihan_b',
        'pilihan_c',
        'pilihan_d',
        'pilihan_e',
        'kunci',
        'aktif', 
    ]; // Kolom yang diizinkan untuk diisi

    // Fungsi untuk mengambil semua data pengguna
    public function getSoal($id_soal  = false)
    {
        if($id_soal == false) {
        return $this->findAll();
        }
        return $this->where(['id_soal' => $id_soal])->first();
    }
}
