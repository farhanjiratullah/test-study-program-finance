<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Program Study 1',
            'email' => 'study1@gmail.com',
            'password' => Hash::make('testprogramstudyfinance123')
        ])->assignRole('study');

        User::create([
            'name' => 'Auditor 1',
            'email' => 'auditor1@gmail.com',
            'password' => Hash::make('testprogramstudyfinance123')
        ])->assignRole('auditor');

        User::create([
            'name' => 'Admin 1',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('testprogramstudyfinance123')
        ])->assignRole('admin');
    }
}
