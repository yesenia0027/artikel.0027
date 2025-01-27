<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class User extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'=>'admin',
                'password'=>password_hash('admin123', PASSWORD_DEFAULT),
                'nama_pengguna'=> 'yesi',
                'telp_pengguna'=> '08846473839',
                'email_pengguna'=> 'yesi@gmail.com',
                'level_pengguna'=> 'admin'
            ],
            [
                'username'=>'guru',
                'password'=>password_hash('guru123', PASSWORD_DEFAULT),
                'nama_pengguna'=> 'nina',
                'telp_pengguna'=> '0884643532',
                'email_pengguna'=> 'nina@gmail.com',
                'level_pengguna'=> 'guru'
            ],
            [
                'username'=>'siswa',
                'password'=>password_hash('siswa123', PASSWORD_DEFAULT),
                'nama_pengguna'=> 'andra',
                'telp_pengguna'=> '08846474899',
                'email_pengguna'=> 'andra@gmail.com',
                'level_pengguna'=> 'siswa'
            ]
            ];
            $this->db->table('pengguna')->insertBatch($data);
    }
}
