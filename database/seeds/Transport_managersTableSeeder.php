<?php

use Illuminate\Database\Seeder;

class Transport_managersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transport_manager = DB::table('transport_managers')->create([
            [
                'name'      => 'admintest',
                'password'       => Hash::make('password'),
            ],
        ]);
    }
}
