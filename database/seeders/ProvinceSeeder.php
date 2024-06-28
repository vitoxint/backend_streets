<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('provinces')->insert(
            [
                ['name' => 'Curicó', 'region_id' => 7],
                ['name' => 'Talca', 'region_id' => 7],
                ['name' => 'Linares', 'region_id' => 7],
                ['name' => 'Cauquenes', 'region_id' => 7],
                ['name' => 'Arauco', 'region_id' => 8],
                ['name' => 'Biobío', 'region_id' => 8],
                ['name' => 'Concepción', 'region_id' => 8],

            ]
        );
    }
}
