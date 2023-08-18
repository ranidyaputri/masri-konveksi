<?php

namespace Database\Seeders;

use App\Models\DetailKatalog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailKatalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_katalog' => 1,
                'file_name' => 'wanita1.jpg',
            ],
            [
                'id_katalog' => 1,
                'file_name' => 'wanita2.jpg',
            ],
            [
                'id_katalog' => 1,
                'file_name' => 'wanita3.jpg',
            ],
            [
                'id_katalog' => 1,
                'file_name' => 'wanita4.jpg',
            ],
            [
                'id_katalog' => 2,
                'file_name' => 'kebaya1.jpg',
            ],
            [
                'id_katalog' => 2,
                'file_name' => 'kebaya2.jpg',
            ],
            [
                'id_katalog' => 2,
                'file_name' => 'kebaya3.jpg',
            ],
            [
                'id_katalog' => 2,
                'file_name' => 'kebaya4.jpg',
            ],
            [
                'id_katalog' => 2,
                'file_name' => 'kebaya5.jpg',
            ],
            [
                'id_katalog' => 3,
                'file_name' => 'seragam1.jpg',
            ],
            [
                'id_katalog' => 3,
                'file_name' => 'seragam2.jpg',
            ],
            [
                'id_katalog' => 3,
                'file_name' => 'seragam3.jpg',
            ],
            [
                'id_katalog' => 3,
                'file_name' => 'seragam4.jpg',
            ],
            [
                'id_katalog' => 4,
                'file_name' => 'pdh1.jpg',
            ],
            [
                'id_katalog' => 4,
                'file_name' => 'pdh2.jpg',
            ],
            [
                'id_katalog' => 5,
                'file_name' => 'jubah1.jpg',
            ],
            [
                'id_katalog' => 5,
                'file_name' => 'jubah2.jpg',
            ],
            
        ];
        
        foreach ($data as $value) {
            DetailKatalog::insert(
                [
                    'id_katalog' => $value['id_katalog'],
                    'file_name' => $value['file_name'],
                ]
            );
        }
    }
}
