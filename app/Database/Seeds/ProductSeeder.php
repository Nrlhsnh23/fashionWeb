<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'title' => 'Fashion',
            'caption'    => 'welcome to fashion news',
            'category'    => 'Tren_Fashion',
        ];

        // Simple Queries
        $this->db->table('products')->insert($data);
        
        $data = [
            'title' => 'Beauty',
            'caption'    => 'welcome to beauty news',
            'category'    => 'Beauty',
        ];
        // Using Query Builder
        $this->db->table('products')->insert($data);
    }
}