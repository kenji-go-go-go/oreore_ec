<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = DB::table('products')->create([
            [
                'name'           => 'トマト試作',
                'image_path'      => '~/tomato_test.jpg',
                'unit_price'      => '999',
                'stock_number'       => 9,
            ],
        ]);
    }
}
