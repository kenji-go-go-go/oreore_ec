<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('statuses')->insert([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name'      => '配送中',
        ]);
    }
}
