<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('user')->delete();

        DB::table('user')->insert([
            'name' => 'admin',
            'email' => 'markmanomolnar@gmail.com',
            'password' => bcrypt('admin'),
            'tether' => 3,
            'active' => 1
        ]);
    }
}
