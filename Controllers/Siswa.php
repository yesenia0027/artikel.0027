<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Siswa extends BaseController
{
    public function index(): string
    {
        return view('Siswa/dashboard');
    }
    public function Vdataujian(): string{
        $Mujian = new \App\Models\Mujian();
        $data['ujian'] = $Mujian->getUjian();

        return view('siswa/Vdataujian', $data);
    }
    public function Vinfonilai(): string{
        $Mujian = new \App\Models\Mujian();
        $data['ujian'] = $Mujian->getUjian();

        return view('siswa/Vinfonilai', $data);
    }
}