<?php

namespace App\Models;

use CodeIgniter\Model;

class Mujian extends Model
{
    protected $table = 'ujian';       // Nama tabel di database
    protected $primaryKey = 'id_ujian'; // Primary key tabel
    protected $allowedFields = [
        'id_ujian',
        'id_soal', 
        'sumber_soal', 
        'deskripsi', 
        'tgl_mulai_ujian',
        'waktu',
        'jum_soal',
        'jangka_waktu_ujian',
        'status_ujian',
        'tipe_ujian',
        'dibuat_oleh', 
        'mata_pelajaran',
    ]; // Kolom yang diizinkan untuk diisi

    // Fungsi untuk mengambil semua data pengguna
    public function getUjian()
    {
        return $this->findAll();
    }
}
