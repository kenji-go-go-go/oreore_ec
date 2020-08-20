<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'created_at'      => Carbon::now(),
            'updated_at'      => Carbon::now(),
            'name'           => 'テストユーザー',
            'email'      => 'test@example.com',
            'company'      => '株式会社テスト',
            'password'       => Hash::make('password'),
        ]);
    }
}
