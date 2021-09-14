<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'id'=> 1,
            'ime' => 'Novak',
            'prezime' => 'Djokovic',
            'fakultet'=> 'Poljoprivredni'
        ]);

        DB::table('students')->insert([
            'id'=> 2,
            'ime' => 'Jovan',
            'prezime' => 'Saponjic',
            'fakultet'=> 'FON'
        ]);

        DB::table('students')->insert([
            'id'=> 3,
            'ime' => 'Vladislav',
            'prezime' => 'Stojkovic',
            'fakultet'=> 'ETF'
        ]);
    }
}
