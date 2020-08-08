<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsTableSeeder extends Seeder
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
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name'           => 'トマト試作',
                'image_path'      => '~/tomato_test.jpg',
                'unit_price'      => '999',
                'stock_number'       => 9,
            ],
        ]);
    }
}
