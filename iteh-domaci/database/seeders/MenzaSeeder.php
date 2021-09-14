<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menzas')->insert([
            'id'=> 1,
            'student'=> 1,
            'dorucak'=>3,
            'rucak' => 4,
            'vecera'=>3
        ]);

        DB::table('menzas')->insert([
            'id'=> 2,
            'student'=> 3,
            'dorucak'=>10,
            'rucak' => 10,
            'vecera'=>10
        ]);

        DB::table('menzas')->insert([
            'id'=> 3,
            'student'=> 2,
            'dorucak'=>7,
            'rucak' => 2,
            'vecera'=>2
        ]);
    }
}
