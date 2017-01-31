<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(PubSeeder::class);
        $this->call(User2PubSeeder::class);
        $this->call(UserPropertiesSeeder::class);
        $this->call(DrinkGroupSeeder::class);
        $this->call(DrinksSeeder::class);
    }
}
