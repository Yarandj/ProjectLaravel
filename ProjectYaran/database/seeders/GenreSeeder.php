<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('genres')->insert([
            'name' => 'Landschapkunst',
        ]);DB::table('genres')->insert([
            'name' => 'Portretkunst',
        ]);DB::table('genres')->insert([
            'name' => 'Historischekunst',
        ]);DB::table('genres')->insert([
            'name' => 'Abstract',
        ]);DB::table('genres')->insert([
            'name' => 'Zeekunst',
        ]);
    }
}
