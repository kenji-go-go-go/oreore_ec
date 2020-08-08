<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $set_user_id = App\User::select('id')->orderByRaw("RAND()")->first()->id;
        DB::table('destinations')->insert([
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'user_id'           => $set_user_id,
                'name'           => '配送先テスト宛先名',
                'tel'           => '09099999999',
                'zipcode'      => '1231234',
                'prefecture'          => '東京都',
                'city'      => '千代田区',
                'address1'      => 'テスト町',
                'address2'      => '1-1-1',
        ]);
    }
}
