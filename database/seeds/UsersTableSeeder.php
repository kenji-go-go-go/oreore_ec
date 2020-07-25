<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->create([
            [
                'name'           => 'テストユーザー',
                'email'      => 'test@example.com',
                'company'      => '株式会社テスト',
                'password'       => Hash::make('password'),
            ],
        ]);
    }
}
