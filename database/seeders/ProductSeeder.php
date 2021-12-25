<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id'=>1,
                'name'=>'product one',
                'buy_price'=>100,
                'sell_price'=>150,
                'quantity'=>20
            ],
            [
                'id'=>2,
                'name'=>'product two',
                'buy_price'=>1000,
                'sell_price'=>1500,
                'quantity'=>200
            ],
            [
                'id'=>3,
                'name'=>'product three',
                'buy_price'=>10,
                'sell_price'=>15,
                'quantity'=>2
            ]
        ]);
    }
}
