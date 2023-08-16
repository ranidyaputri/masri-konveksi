<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'status' => 'Pesanan diproses'
            ],
            [
                'status' => 'Mulai sampling'
            ],
            [
                'status' => 'Proses pemotongan kain'
            ],
            [
                'status' => 'Mulai menjahit'
            ],
            [
                'status' => 'Proses quality control'
            ],
            [
                'status' => 'Proses steam dan packaging'
            ],
            [
                'status' => 'Barang siap diantar'
            ],
            [
                'status' => 'Barang dalam perjalanan'
            ],
        ];
        
        foreach ($data as $value) {
            Status::insert(
                [
                    'status' => $value['status'],
                ]
            );
        }
    }
}
