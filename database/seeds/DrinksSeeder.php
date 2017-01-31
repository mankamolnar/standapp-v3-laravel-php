<?php

use Illuminate\Database\Seeder;
use App\Pub;
use App\DrinkGroup;

class DrinksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drinks')->delete();

        DB::table('drinks')->insert([
            'pub_id' => Pub::where('name', 'Test #1')->value('id'),
            'group_id' => DrinkGroup::where('name', 'Sörök')->value('id'),
            'number_in_list' => 1,
            'name' => 'Csíki sör',
            'price' => 100,
            'purchase_price' => 50,
            'close_stock_bigger' => 0,
            'visible' => 1
        ]);

        DB::table('drinks')->insert([
            'pub_id' => Pub::where('name', 'Test #1')->value('id'),
            'group_id' => DrinkGroup::where('name', 'Sörök')->value('id'),
            'number_in_list' => 1,
            'name' => 'Holsten',
            'price' => 100,
            'purchase_price' => 50,
            'close_stock_bigger' => 0,
            'visible' => 1
        ]);
    }
}
