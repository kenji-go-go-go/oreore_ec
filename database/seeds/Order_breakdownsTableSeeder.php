<?php

use Illuminate\Database\Seeder;

class Order_breakdownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set_orderdetail_id = App\Orderdetail::select('id')->orderByRaw("RAND()")->first()->id;
        $set_product_id = App\Product::select('id')->orderByRaw("RAND()")->first()->id;
        DB::table('order_breakdowns')->insert([
            [
                'order_detail_id'           => $set_orderdetail_id,
                'product_id'      => $set_product_id,
                'number'      => 10,
            ],
        ]);
    }
}
