<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Produksi',
            'SCM',
            'Teknik',
            'RND-REG',
            'Umum & SDM',
            'QC',
            'QA',
        ];

        foreach ($departments as $name) {
            Department::create(['name' => $name]);
        }
    }
}
