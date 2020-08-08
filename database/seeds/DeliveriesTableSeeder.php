<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('deliveries')->insert([
            [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'company'      => '株式会社テスト',
                'address'           => '東京都江東区配送元町9-9-9',
                'tel'           => '09011111111',
                'name'      => '配送元テスト株式会社',
                'email'      => 'delivertest@example.com',
            ],
        ]);
    }
}
