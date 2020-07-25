<?php

use Illuminate\Database\Seeder;

class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $track = DB::table('tracks')->create([
            [
                'name'      => '一号車トラック',
                'name'      => '一号車ドライバー',
            ],
        ]);
    }
}
