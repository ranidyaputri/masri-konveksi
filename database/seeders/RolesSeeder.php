<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'role' => 'Admin'
            ],
            [
                'role' => 'Customer'
            ],
        ];
        
        foreach ($data as $value) {
            Roles::insert(
                [
                    'role' => $value['role'],
                ]
            );
        }
    }
}
