<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teams')->insert([
            'name' => 'Atlético de Madrid',
            'diminutive' => 'ATM',
            'coach' => 'Diego Simeone',
            'country_id' => 2,
        ]);
        DB::table('teams')->insert([
            'name' => 'Chelsea',
            'diminutive' => 'CHE',
            'coach' => 'Graham Potter',
            'country_id' => 1,
        ]);
        DB::table('teams')->insert([
            'name' => 'Bayern de Munich',
            'diminutive' => 'FBM',
            'coach' => 'Julian Nagelsmann',
            'country_id' => 3,
        ]);
        DB::table('teams')->insert([
            'name' => 'Real Madrid',
            'diminutive' => 'RMA',
            'coach' => 'Carlo Ancelotti',
            'country_id' => 2,
        ]);
    }
}
