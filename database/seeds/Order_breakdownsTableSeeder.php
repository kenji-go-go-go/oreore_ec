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
        $order_breakdown = DB::table('order_breakdowns')->create([
            [
                'order_details_id'           => $order_detail->id,
                'product_id'      => $product->id,
                'number'      => 10,
            ],
        ]);
    }
}
