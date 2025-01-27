<?php

namespace App\Models;

use CodeIgniter\Model;

class Msiswa extends Model
{
    protected $table = 'siswa';       // Nama tabel di database
    protected $primaryKey = 'nis'; // Primary key tabel
    protected $allowedFields = [
        'nis',
        'id_siswa', 
        'nama_siswa', 
        'pwd_siswa', 
        'email_siswa',
        'telp_siswa', 
    ]; // Kolom yang diizinkan untuk diisi

    // Fungsi untuk mengambil semua data pengguna
    public function getSiswa()
    {
        return $this->findAll();
    }
}
