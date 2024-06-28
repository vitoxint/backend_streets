<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class CommuneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('communes')->insert(
            [
                ['name' => 'Arauco', 'province_id' => 5],
                ['name' => 'Los Ángeles', 'province_id' => 6],
                ['name' => 'Concepción', 'province_id' => 7],

            ]
        );
    }
}
