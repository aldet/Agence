<?php

use Illuminate\Database\Seeder;

class MarquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('marques')->insert([
            [
             'marque_vehicule'=> 'peugeot',
            ],
             [
             'marque_vehicule'=> 'Audi',
            ],
             [
             'marque_vehicule'=> 'Renault',
            ],
             [
             'marque_vehicule'=> 'Prado',
            ],
        ]);
    }
}
