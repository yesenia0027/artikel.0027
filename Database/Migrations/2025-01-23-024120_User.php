<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $this->forge->addfield([
            'id_pengguna' => [
                'type'      => 'INT',
                'constraint'=> '10',
                'auto_increment'=> true,
            ],
            'username' => [
                'type'      => 'VARCHAR',
                'constraint'=> '30',
                'unique'=> true,
            ],
            'password' => [
                'type'      => 'VARCHAR',
                'constraint'=> '50',
            ],
            'nama_pengguna' => [
                'type'      => 'VARCHAR',
                'constraint'=> '40',
            ],
            'telp_pengguna' => [
                'type'      => 'VARCHAR',
                'constraint'=> '12',
            ],
            'email_pengguna' => [
                'type'      => 'VARCHAR',
                'constraint'=> '30',
            ],
            'level_pengguna' => [
                'type'      => 'ENUM',
                'constraint'=> ['admin','guru','siswa'],
            ],
        ]);
        $this->forge->addKey('id_pengguna', TRUE);
        $this->forge->createTable('pengguna');
    }

    public function down()
    {
        $this->forge->dropTable('pengguna');
    }
}
