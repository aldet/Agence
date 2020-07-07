<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
           [
            'num_permis' => 'KA1200',
            'nom_client' =>  'Jean',
            'prenom'     =>  'Luc',
             'email'     =>   'jean@gmail.com',
             'pays'      =>   'Maroc',
             'telephone' =>   '056699696',
        ],]);
    }
}
