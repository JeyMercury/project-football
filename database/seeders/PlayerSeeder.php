<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            'name' => 'Koke Resurreción',
            'number' => '6',
            'nationality' => 'Español',
            'team_id' => 1,
            'position' => 'Centrocampista',
        ]);
        DB::table('teams')->insert([
            'name' => 'Mason Mount',
            'number' => '19',
            'nationality' => 'Británica',
            'team_id' => 2,
            'position' => 'Centrocampista',
        ]);
    }
}
