<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Guru extends BaseController
{
    public function index(): string
    {
        return view('Guru/dashboard');
    }
    public function Vdatasiswa(): string{
        $Msiswa = new \App\Models\Msiswa();
        $data['siswa'] = $Msiswa->getSiswa();

        return view('guru/Vdatasiswa', $data);
    }
    public function Vdatakatsoal(): string{
        $Mkategori = new \App\Models\Mkategori();
        $data['kategori_soal'] = $Mkategori->getKategoriSoal();

        return view('guru/Vdatakatsoal', $data);
    }
    public function Vdatasoal(): string{
        $Msoal = new \App\Models\Msoal();
        $data['soal'] = $Msoal->getSoal();

        return view('guru\Vdatasoal', $data);
    }
    public function Vdataujian(): string{
        $Mujian = new \App\Models\Mujian();
        $data['ujian'] = $Mujian->getUjian();

        return view('guru\Vdataujian', $data);
    }
    public function Vujiansiswa(): string{
        $Mujiansiswa = new \App\Models\Mujiansiswa();
        $data['ujian_siswa'] = $Mujiansiswa->getUjianSiswa();

        return view('guru\Vujiansiswa', $data);
    }
}