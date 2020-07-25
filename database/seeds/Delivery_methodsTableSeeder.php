<?php

use Illuminate\Database\Seeder;

class Delivery_methodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delivery_method = DB::table('delivery_methods')->create([
            [
                'name'      => '置き配',
            ],
        ]);
    }
}
