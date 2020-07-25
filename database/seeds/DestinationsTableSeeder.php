<?php

use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destination = DB::table('destinations')->create([
            [
                'user_id'           => $user->id,
                'name'           => '配送先テスト宛先名',
                'tel'           => '09099999999',
                'zipcode'      => '1231234',
                'prefecture'          => '東京都',
                'city'      => '千代田区',
                'address1'      => 'テスト町',
                'address2'      => '1-1-1',
            ],
        ]);
    }
}
