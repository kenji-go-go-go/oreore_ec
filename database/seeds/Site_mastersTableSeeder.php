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
        $set_order_id = App\Order::select('id')->orderByRaw("RAND()")->first()->id;
        $set_track_id = App\Track::select('id')->orderByRaw("RAND()")->first()->id;
        DB::table('site_masters')->insert([
            [
                'order_id'      => $set_order_id,
                'track_id'      => $set_track_id,
            ],
        ]);
    }
}
