<?php

use Illuminate\Database\Seeder;

class DeliveriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $delivery = DB::table('deliveries')->create([
            [
                'company'      => '株式会社テスト',
                'address'           => '東京都江東区配送元町9-9-9',
                'tel'           => '09011111111',
                'name'      => '配送元テスト株式会社',
                'email'      => 'delivertest@example.com',
            ],
        ]);
    }
}
