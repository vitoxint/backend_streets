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
                ['name' => 'Arauco', 'provincie_id' => 5],
                ['name' => 'Los Ángeles', 'provincie_id' => 6],
                ['name' => 'Concepción', 'provincie_id' => 7],

            ]
        );
    }
}
