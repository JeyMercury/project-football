<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompetitionTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('competition_team')->insert([
            'team_id' => 1,
            'competition_id' => 1,
        ]);
        DB::table('competition_team')->insert([
            'team_id' => 1,
            'competition_id' => 2,
        ]);
        DB::table('competition_team')->insert([
            'team_id' => 2,
            'competition_id' => 1,
        ]);
        DB::table('competition_team')->insert([
            'team_id' => 2,
            'competition_id' => 2,
        ]);
    }
}
