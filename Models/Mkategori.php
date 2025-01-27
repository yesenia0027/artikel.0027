<?php

namespace App\Models;

use CodeIgniter\Model;

class Mkategori extends Model
{
    protected $table = 'kategori_soal';       // Nama tabel di database
    protected $primaryKey = 'id_kategori'; // Primary key tabel
    protected $allowedFields = [
        'id_kategori', 
        'id_mapel', 
        'nama_kategori', 
    ]; // Kolom yang diizinkan untuk diisi

    // Fungsi untuk mengambil semua data pengguna
    public function getKategoriSoal()
    {
        return $this->findAll();
    }
}
