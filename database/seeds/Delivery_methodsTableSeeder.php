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
        DB::table('delivery_methods')->insert([
                'name'      => '置き配',
        ]);
    }
}
