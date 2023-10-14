<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('galleries')->insert([
            'name' => 'Sterrennacht',
            'artist' => 'Vincent Van Gogh',
            'genre' => '1',
        ]);DB::table('galleries')->insert([
            'name' => 'Meisje met de parel',
            'artist' => 'Johannes Vermeer',
            'genre' => '2',
        ]);DB::table('galleries')->insert([
            'name' => 'Appelsap',
            'artist' => 'Mikael',
            'genre' => '3',
        ]);DB::table('galleries')->insert([
            'name' => 'Druivensap',
            'artist' => 'Yaran',
            'genre' => '1',
        ]);DB::table('galleries')->insert([
            'name' => 'Banaan',
            'artist' => 'Milan Knol',
            'genre' => '4',
        ]);DB::table('galleries')->insert([
            'name' => 'Fietsbel',
            'artist' => 'Jan Fiets',
            'genre' => '5',
        ]);
    }
}
