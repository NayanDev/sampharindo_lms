<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Position;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $positions = [
            'Manager',
            'Asisten Manager',
            'Supervisor Produksi',
            'Supervisor Kemas',
            'KP Kemas',
            'KP Produksi',
            'Administrasi',
        ];

        foreach ($positions as $name) {
            Position::create(
                ['name' => $name,
                'department_id' => 1]);
        }
    }
}
