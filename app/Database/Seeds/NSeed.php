<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NSeed extends Seeder
{
    public function run()
    {
        $data = [
            'inv_titulo' => 'Escobas',
            'inv_descripcion'    => 'Armario de escobas',
        ];

        // Using Query Builder
        $this->db->table('tbl_inventario')->insert($data);
    }
}