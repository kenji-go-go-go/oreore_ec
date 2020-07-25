<?php

use Illuminate\Database\Seeder;

class Order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order_detail = DB::table('order_details')->create([
            [
                'order_id'           => $order->id,
                'total_amount'      => '9990',
            ],
        ]);
    }
}
