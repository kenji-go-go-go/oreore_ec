<?php

use Illuminate\Database\Seeder;

class Transport_managementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transport_management = DB::table('transport_managements')->create([
            [
                'order_id'           => $order->id,
                'product_id'      => $product->id,
                'track_id'      => $track->id,
            ],
        ]);
    }
}
