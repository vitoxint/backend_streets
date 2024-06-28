<?php

namespace Database\Seeders;
use DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('regions')->insert(
            [
                
                ['name' => 'Tarapacá'],
                ['name' => 'Antofagasta'],
                ['name' => 'Atacama'],
                ['name' => 'Coquimbo'],
                ['name' => 'Valparaíso'],              
                ['name' => 'Libertador General Bernardo O\'Higgins'],
                ['name' => 'Maule'],
                ['name' => 'Biobío'],
                ['name' => 'La Araucanía'],
                ['name' => 'Los Lagos'],
                ['name' => 'Aysén del General Carlos Ibáñez del Campo'],
                ['name' => 'Magallanes y de la Antártica Chilena'],
                ['name' => 'Metropolitana de Santiago'],
                ['name' => 'Los Ríos'],
                ['name' => 'Arica y Parinacota'],
                ['name' => 'Ñuble'], 
           
            ]
        );
    }
}
