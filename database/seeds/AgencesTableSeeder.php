<?php

use Illuminate\Database\Seeder;

class AgencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('agences')->insert([
            [
                
                'nom_agence'=> 'agence 1',
                'pays' =>'Maroc',
                'ville' => 'Tanger',
                'adresse_agence' => 'appt 12 aida village',
                'email_agence' => 'agence1@gmail.com',
            ] 
        ]);
    }
}
