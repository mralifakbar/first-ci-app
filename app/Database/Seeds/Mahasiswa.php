<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'npm' => '2017051049',
                'nama'    => 'Alif AKbar Kartadinata',
                'alamat' => 'Pringsewu',
                'created_at' => Time::now(),
            ],
            [
                'npm' => '2017051078',
                'nama'    => 'Arib Yusron Hamdani',
                'alamat' => 'Bandar Lampung',
                'created_at' => Time::now(),
            ],
        ];

        // Simple Queries
        $this->db->query('INSERT INTO mahasiswa (npm, nama, alamat, created_at) VALUES(:npm, :nama, :alamat, :created_at)', $data);

        // Using Query Builder
        $this->db->table('mahasiswa')->insert($data);
    }
}