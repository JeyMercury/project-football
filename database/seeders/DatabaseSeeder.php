<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     * 
     * @return void
     */
    public function run(): void
    {
        $this->call([
            CompetitionSeeder::class,
            CountrySeeder::class,
            TeamSeeder::class,
            PlayerSeeder::class,
        ]);
    }
}
