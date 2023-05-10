<?php

namespace Database\Seeders;

use DB;
use Hash;
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
         DB::table('users')->insert([
            [
                'name' => 'luis',
                'email' => 'admin@example.com',
                'password' => Hash::make('12345678'),
                'rol' => 'admin'
            ],
            [
                'name' => 'luis guillermo',
                'email' => 'lgbayona1988@gmail.com',
                'password' => Hash::make('12345678'),
                'rol' => 'user'
            ]
        ]);
    }
}
