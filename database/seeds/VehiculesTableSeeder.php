<?php

use Illuminate\Database\Seeder;

class VehiculesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vehicules')->insert([
            [
            'nom' =>  'peugeot 220',
            'num_matriculation' => '2828383',
            'km_compteur' =>'230',
            'date_achat' =>'2020-04-20',
            'photo_vehicule' => 'kkkk',
            'carte_grise' => 'pro.jpg',
            'agence_id' => '1',],
            [
            'nom' =>  'Prado 22',
            'num_matriculation' => '2828dd',
            'km_compteur' =>'260',
            'date_achat' =>'2020-07-20',
            'photo_vehicule' => 'pr.jpg',
            'carte_grise' => 'photo.jpg',
            'agence_id' => '1',],
            [
            'nom' =>  'renault 2',
            'num_matriculation' => '2kk83',
            'km_compteur' =>'290',
            'date_achat' =>'2020-08-20',
            'photo_vehicule' => 'kkkk',
            'carte_grise' => 'R.jpg',
            'agence_id' => '1',],
        ]);
    }
}
