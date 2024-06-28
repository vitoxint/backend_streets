<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class StreetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('streets')->insert(
            [
                ['name' => 'Los Carrera', 'commune_id' => 3],
                ['name' => 'Arturo Prat', 'commune_id' => 3],
                ['name' => 'Ignacio Serrano', 'commune_id' => 1],
                ['name' => 'Antuco', 'commune_id' => 2],
                ['name' => 'Los Maitenes', 'commune_id' => 1]
                

            ]
        );
    }
}
