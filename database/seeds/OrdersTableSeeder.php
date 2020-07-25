<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = DB::table('orders')->create([
            [
                'user_id'           => $user->id,
                'delivery_id'           => $delivery->id,
                'destination_id'           => $destination->id,
                'delivery_date'      => '20201122',
                'delivery_method_id'          => $delivery_method->id,
                'track_id'      => $track->id,
                'status_id'      => $status->id,
            ],
        ]);
    }
}
