<?php

use Illuminate\Database\Seeder;

class AdministratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = DB::table('administrators')->create([
            [
                'name'      => 'admintest',
                'password'       => Hash::make('password'),
            ],
        ]);
    }
}
