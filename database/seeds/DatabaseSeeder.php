<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([UsersTableSeeder::class]);
        $this->call([RolesTableSeeder::class]);
        $this->call([AgencesTableSeeder::class]);
        $this->call([CategoriesTableSeeder::class]);
        $this->call([TarificationsTableSeeder::class]);
        $this->call([VehiculesTableSeeder::class]);
        $this->call([MarquesTableSeeder::class]);
        $this->call([ClientsTableSeeder::class]);
    }
}
