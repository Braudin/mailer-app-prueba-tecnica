<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'password' => Hash::make('password'),
            'email' => 'braudinlaya@gmail.com',
            'name' => 'Braudin Laya',
            'phone' => '5930982889411',
            'idcard' => '123456789',
            'dateofbirth' => '1986-09-30',
            'city' => '1',
        ]);
    }
}
