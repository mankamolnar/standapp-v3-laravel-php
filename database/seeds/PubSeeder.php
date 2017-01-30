<?php

use Illuminate\Database\Seeder;

class PubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pub')->delete();

        DB::table('pub')->insert([
            'name' => 'Test #1',
            'daily_fee' => 0
        ]);

        DB::table('pub')->insert([
            'name' => 'Test #2',
            'daily_fee' => 0
        ]);
    }
}
