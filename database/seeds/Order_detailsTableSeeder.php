<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Order_detailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set_order_id = App\Order::select('id')->orderByRaw("RAND()")->first()->id;
        DB::table('order_details')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'order_id'           => $set_order_id,
                'total_amount'      => '9990',
            ],
        ]);
    }
}
