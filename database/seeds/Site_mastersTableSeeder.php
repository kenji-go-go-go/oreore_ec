<?php

use Illuminate\Database\Seeder;

class Site_mastersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $site_master = DB::table('site_masters')->create([
            [
                'order_id'           => $order->id,
                'track_id'      => $track->id,
            ],
        ]);
    }
}
