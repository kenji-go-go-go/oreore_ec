<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('administrators')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'name'      => 'admintest',
                'password'       => Hash::make('password'),
            ],
        ]);
    }
}
