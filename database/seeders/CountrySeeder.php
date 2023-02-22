<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('countries')->insert([
            'name' => 'Reino Unido',
            'diminutive' => 'UK',
            'continent' => 'Europa',
            'first_language' => 'Inglés'
        ]);
        DB::table('countries')->insert([
            'name' => 'España',
            'diminutive' => 'ES',
            'continent' => 'Europa',
            'first_language' => 'Español'
        ]);
    }
}
