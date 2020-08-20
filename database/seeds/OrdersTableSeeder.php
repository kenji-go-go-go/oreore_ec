<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set_user_id = App\User::select('id')->orderByRaw("RAND()")->first()->id;
        $set_delivery_id = App\Delivery::select('id')->orderByRaw("RAND()")->first()->id;
        $set_destination_id = App\Destination::select('id')->orderByRaw("RAND()")->first()->id;
        $set_delivery_method_id = App\Delivery_Method::select('id')->orderByRaw("RAND()")->first()->id;
        $set_track_id = App\Delivery_Method::select('id')->orderByRaw("RAND()")->first()->id;
        $set_status_id = App\Delivery_Method::select('id')->orderByRaw("RAND()")->first()->id;
        DB::table('orders')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id'           => $set_user_id,
                'delivery_id'           => $set_delivery_id,
                'destination_id'           => $set_destination_id,
                'delivery_date'      => '20201122',
                'delivery_method_id'          => $set_delivery_method_id,
                'track_id'      => $set_track_id,
                'status_id'      => $set_status_id,
            ],
        ]);
    }
}
