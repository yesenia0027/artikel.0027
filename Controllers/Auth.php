<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function autentikasi()
    {
        $ModelPengguna = new \App\Models\ModelPengguna();

        if ($this->request->getMethod() === 'POST') {
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');
            $nama_pengguna = $this->request->getPost('nama_pengguna');
            // dd($username, $password);

            if (!$dataLogin = $ModelPengguna->where('username', $username)->first()) {
                $err = "Username tidak terdaftar";
            }

            if (empty($err)) {
                // Validasi password menggunakan password_hash
                $dataLogin = $ModelPengguna->where('username', $username)->first();
                if (!password_verify($password, $dataLogin['password'])) {
                    $err = "Password tidak sesuai";
                    dd($password, $dataLogin['password']); // Untuk memastikan password dan hash yang diambil dari DB

                }
            }

            if (empty($err)) {
                // Menyimpan data sesi setelah berhasil login
                $dataSesi = [
                    'id_pengguna' => $dataLogin['id_pengguna'],
                    'username' => $dataLogin['username'],
                    'password' => $dataLogin['password'],
                    'level_pengguna' => $dataLogin['level_pengguna'],
                ];
                session()->set($dataSesi);

                // Redirect berdasarkan level pengguna menggunakan switch case
                switch ($dataLogin['level_pengguna']) {
                    case 'admin':
                        return redirect()->to('/Admin/dashboard');
                    case 'guru':
                        return redirect()->to('/Guru/dashboard');
                    case 'siswa':
                        return redirect()->to('/Siswa/dashboard');
                    default:
                        // Jika level tidak dikenali, logout dan redirect ke halaman utama
                        session()->remove('level_pengguna');
                        return redirect()->to('/')->with('error', 'Akses tidak valid');
                }
            }

            if (isset($err)) {
                // Menyimpan error dan username untuk feedback
                session()->setFlashdata('username', $username);
                session()->setFlashdata('error', $err);
                return redirect()->to('/');
            }
        }

        return redirect()->to('/');
    }

    public function logout()
    {
        // Menghapus semua data session
        session()->destroy();

        // Redirect ke halaman login atau halaman utama setelah logout
        return redirect()->to('/')->with('success', 'You have successfully logged out.');
    }
}