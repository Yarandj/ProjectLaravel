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
            'genre_id' => '1',
            'user_id' => '1',
            'status' => true,
        ]);DB::table('galleries')->insert([
            'name' => 'Meisje met de parel',
            'artist' => 'Johannes Vermeer',
            'genre_id' => '2',
        'user_id' => '1',
        'status' => true,
        ]);DB::table('galleries')->insert([
            'name' => 'Appelsap',
            'artist' => 'Mikael',
            'genre_id' => '3',
        'user_id' => '1',
        'status' => true,
        ]);DB::table('galleries')->insert([
            'name' => 'Druivensap',
            'artist' => 'Yaran',
            'genre_id' => '1',
        'user_id' => '1',
        'status' => true,
        ]);DB::table('galleries')->insert([
            'name' => 'Banaan',
            'artist' => 'Milan Knol',
            'genre_id' => '4',
        'user_id' => '1',
        'status' => true,
        ]);DB::table('galleries')->insert([
            'name' => 'Fietsbel',
            'artist' => 'Jan Fiets',
            'genre_id' => '5',
        'user_id' => '1',
        'status' => true,
        ]);
    }
}
