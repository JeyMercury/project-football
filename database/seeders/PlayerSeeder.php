<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('players')->insert([
            'name' => 'Koke Resurreción',
            'dorsal' => 6,
            'nationality' => 'Español',
            'team_id' => 1,
            'position' => 'Centrocampista',
        ]);
        DB::table('players')->insert([
            'name' => 'Mason Mount',
            'dorsal' => 19,
            'nationality' => 'Británica',
            'team_id' => 2,
            'position' => 'Centrocampista',
        ]);
        DB::table('players')->insert([
            'name' => 'Manuel Neuer',
            'dorsal' => 1,
            'nationality' => 'Alemán',
            'team_id' => 3,
            'position' => 'Portero',
        ]);
        DB::table('players')->insert([
            'name' => 'Karim Benzema',
            'dorsal' => 19,
            'nationality' => 'Francés',
            'team_id' => 4,
            'position' => 'Delantero',
        ]);
    }
}
