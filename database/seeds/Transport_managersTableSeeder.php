<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Transport_managersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transport_managers')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name'      => 'admintest',
                'password'       => Hash::make('password'),
            ],
        ]);
    }
}
