<?php

use Illuminate\Database\Seeder;
use App\Pub;
use App\User;

class User2PubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user2pub')->delete();

        DB::table('user2pub')->insert([
            'user_id' => User::where('name', 'admin')->value('id'),
            'pub_id' => Pub::where('name', 'Test #1')->value('id')
        ]);

        DB::table('user2pub')->insert([
            'user_id' => User::where('name', 'admin')->value('id'),
            'pub_id' => Pub::where('name', 'Test #2')->value('id')
        ]);
    }
}
