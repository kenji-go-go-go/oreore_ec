<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = DB::table('statuses')->create([
            [
                'name'      => '配送中',
            ],
        ]);
    }
}
