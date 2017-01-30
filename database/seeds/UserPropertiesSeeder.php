<?php

use Illuminate\Database\Seeder;
use App\User;

class UserPropertiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_properties')->delete();

        DB::table('user_properties')->insert([
            'user_id' => User::where('name', 'admin')->value('id'),
            'property' => 'lakcim',
            'value' => 'Budapest'
        ]);
    }
}
