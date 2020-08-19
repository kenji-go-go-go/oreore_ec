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
                'image_path'      => '/assets/images/1_thumbnail.jpg',
                'unit_price'      => '999',
                'stock_number'       => 9,
                'description'           => 'フレッシュで甘いトマト！まさにフレッシュフレッシュフレッシュ',
                'box_number'       => 10,
            ],
        ]);
    }
}
