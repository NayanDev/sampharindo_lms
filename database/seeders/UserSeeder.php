<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'department_id' => '1',
            'name' => 'Nayan',
            'position_id' => '1',
            'username' => 'nayantaka',
            'email' => 'nayantaka@gmail.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
