<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
Use App\User;
Use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // DB::table('users')->insert([
          //'name' => 'Admin Admin',
           // 'email' => 'fofo@lightbp.com',
           // 'email_verified_at' => now(),
            //'password' => Hash::make('secret'),
            //'created_at' => now(),
            //'updated_at' => now(),
            
       // ]);
             User::truncate();
             DB::table('role_user')->truncate();
            $Admin=User::create([
                'name' => 'Admin',
                'email' => 'admin@lightbp.com',
                'password' => Hash::make('secret'),
               
             ]);
             $Gestionnaire=User::create([
                'name' => 'Gestionnaire',
                'email' => 'aldet@gmail.com',
                'password' => Hash::make('aldet'),
               
             ]);

               $AdminRole=Role::where('name','Admin')->first();
               $GestionnaireRole=Role::where('name','Gestionnaire')->first();
               $Admin->roles()->attach($AdminRole);
               $Gestionnaire->roles()->attach($GestionnaireRole);

    } 
}
