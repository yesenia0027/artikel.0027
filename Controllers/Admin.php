<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('Admin/dashboard');
    }

    public function coba(): string {
        return view('Admin/coba');
    }

    public function Vdatapengguna(): string{
        $penggunaModel = new \App\Models\PenggunaModel();       // Memuat model
        $data['pengguna'] = $penggunaModel->getPengguna(); // Mengambil semua data pengguna

        return view('Admin/Vdatapengguna', $data);

    }
    public function Vdatamapel(): string{
        $Mmapel = new \App\Models\Mmapel();
        $data['mata_pelajaran'] = $Mmapel->getMapel();

        return view('Admin/Vdatamapel', $data);
    }
    public function Vdatakelas(): string{
        $Mkelas = new \App\Models\Mkelas();
        $data['kelas'] = $Mkelas->getKelas();

        return view('Admin/Vdatakelas', $data);
    }
    public function Vdatasiswa(): string{
        $Msiswa = new \App\Models\Msiswa();
        $data['siswa'] = $Msiswa->getSiswa();

        return view('admin/Vdatasiswa', $data);
    }
    public function Vdatakatsoal(): string{
        $Mkategori = new \App\Models\Mkategori();
        $data['kategori_soal'] = $Mkategori->getKategoriSoal();

        return view('admin/Vdatakatsoal', $data);
    }
    public function Vdatasoal(): string{
        $Msoal = new \App\Models\Msoal();
        $data['soal'] = $Msoal->getSoal();

        return view('admin\Vdatasoal', $data);
    }
    public function Vdataujian(): string{
        $Mujian = new \App\Models\Mujian();
        $data['ujian'] = $Mujian->getUjian();

        return view('admin\Vdataujian', $data);
    }
    public function Vujiansiswa(): string{
        $Mujiansiswa = new \App\Models\Mujiansiswa();
        $data['ujian_siswa'] = $Mujiansiswa->getUjianSiswa();

        return view('admin\Vujiansiswa', $data);
    }
    // AdminController.php
public function tambah_pengguna()
{
    // Validasi input dari form
    $validation = \Config\Services::validation();

    $validation->setRules([
        'username' => 'required|min_length[3]|max_length[50]',
        'password' => 'required|min_length[6]',
        'nama_pengguna' => 'required',
        'telp_pengguna' => 'required|numeric',
        'email_pengguna' => 'required|valid_email',
        'level_pengguna' => 'required',
    ]);

    if (!$validation->withRequest($this->request)->run()) {
        // Jika validasi gagal, redirect kembali dengan error
        return redirect()->to('/admin/tambah_pengguna')->withInput()->with('errors', $validation->getErrors());
    }

    // Ambil data dari form
    $data = [
        'username' => $this->request->getPost('username'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT), // Meng-hash password
        'nama_pengguna' => $this->request->getPost('nama_pengguna'),
        'telp_pengguna' => $this->request->getPost('telp_pengguna'),
        'email_pengguna' => $this->request->getPost('email_pengguna'),
        'level_pengguna' => $this->request->getPost('level_pengguna'),
    ];

    // Simpan data pengguna ke dalam database
    $penggunaModel = new \App\Models\PenggunaModel();
    $penggunaModel->insert($data);

    // Redirect ke halaman daftar pengguna setelah berhasil menambah
    return redirect()->to('/admin/vdatapengguna')->with('success', 'Data pengguna berhasil ditambahkan!');
}

}