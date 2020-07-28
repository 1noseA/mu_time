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
        # 初期化
        DB::table('users')->delete();
        
        # テストデータ挿入
        DB::table('users')->insert([
            [
                'name' => 'kiki',
                'email' => 'test1@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'yoyo',
                'email' => 'test2@example.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'mumu',
                'email' => 'test3@example.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
