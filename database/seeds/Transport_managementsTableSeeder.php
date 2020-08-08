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
        $set_order_id = App\Order::select('id')->orderByRaw("RAND()")->first()->id;
        $set_product_id = App\Product::select('id')->orderByRaw("RAND()")->first()->id;
        $set_track_id = App\Track::select('id')->orderByRaw("RAND()")->first()->id;
        DB::table('transport_managements')->insert([
            [
                'order_id'           => $set_order_id,
                'product_id'      => $set_product_id,
                'track_id'      => $set_track_id,
            ],
        ]);
    }
}
