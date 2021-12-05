<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'Venezuela'
        ], [
            'id' => 2,
            'name' => 'Colombia'
        ], [
            'id' => 3,
            'name' => 'Ecuador'
        ]);
    }
}
