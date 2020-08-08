<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tracks')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'trackname'      => '一号車トラック',
                'drivername'      => '一号車ドライバー',
            ],
        ]);
    }
}
