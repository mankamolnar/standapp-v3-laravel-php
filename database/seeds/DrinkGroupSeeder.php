<?php

use Illuminate\Database\Seeder;

class DrinkGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drink_group')->delete();

        DB::table('drink_group')->insert([
            'name' => "Sörök"
        ]);

        DB::table('drink_group')->insert([
            'name' => 'Rövidek'
        ]);
    }
}