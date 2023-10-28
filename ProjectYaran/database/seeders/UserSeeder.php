<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin123'),
            'role' => '1',
        ]);
        DB::table('users')->insert([
            'name' => 'Klaas',
            'email' => 'klaas@gmail.com',
            'password' => Hash::make('klaas123'),
            'role' => '0',
        ]);
    }
}
