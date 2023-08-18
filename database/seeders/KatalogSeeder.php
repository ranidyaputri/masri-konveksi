<?php

namespace Database\Seeders;

use App\Models\Katalog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Baju Wanita',
                'deskripsi' => 'Custom baju wanita by Masri Konveksi.',
                'file_name' => 'wanita1.jpg',
            ],
            [
                'nama' => 'Kebaya',
                'deskripsi' => 'Custom kebaya by Masri Konveksi.',
                'file_name' => 'kebaya1.jpg',
            ],
            [
                'nama' => 'Seragam',
                'deskripsi' => 'Seragam by Masri Konveksi.',
                'file_name' => 'seragam1.jpg',
            ],
            [
                'nama' => 'Baju PDH',
                'deskripsi' => 'Custom baju PDH by Masri Konveksi.',
                'file_name' => 'pdh1.jpg',
            ],
            [
                'nama' => 'Jubah',
                'deskripsi' => 'Custom jubah by Masri Konveksi.',
                'file_name' => 'jubah1.jpg',
            ],
        ];
        
        foreach ($data as $value) {
            Katalog::insert(
                [
                    'nama' => $value['nama'],
                    'deskripsi' => $value['deskripsi'],
                    'file_name' => $value['file_name'],
                ]
            );
        }
    }
}
