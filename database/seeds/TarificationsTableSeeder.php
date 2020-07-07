<?php

use Illuminate\Database\Seeder;

class TarificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarifications')->insert([
           
           [
            'nom_tarification' => 'voiture de haut standing',
            'montant' => '1200 dh'],
            [
                'nom_tarification' => 'voiture de luxe',
                'montant' => '800 dh'],
        ]);
    }
}
