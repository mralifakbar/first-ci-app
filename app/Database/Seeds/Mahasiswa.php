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
        foreach($data as $dt) {
            $this->db->table('mahasiswa')->insert($dt);
        }
        
    }
}