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
        ]);
        DB::table('competitions')->insert([
            'name' => 'LaLiga',
            'host_country' => 'España',
        ]);
        DB::table('competitions')->insert([
            'name' => 'Premier Leage',
            'host_country' => 'Reino Unido',
        ]);
        DB::table('competitions')->insert([
            'name' => 'BundesLiga',
            'host_country' => 'Alemania',
        ]);
    }
}
