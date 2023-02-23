<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competitions')->insert([
            'name' => 'Champions Leage',
            'host_country' => 'Reino Unido',
            'n_participants_teams' => 32,
        ]);
        DB::table('competitions')->insert([
            'name' => 'Copa Mundial',
            'host_country' => 'Argentina',
            'n_participants_teams' => 48,
        ]);
    }
}
