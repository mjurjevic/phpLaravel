<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TerminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ucionicas')->insert([
            'naziv' => 'RAF1'
        ]);

        DB::table('ucionicas')->insert([
            'naziv' => 'RAF2'
        ]);

        DB::table('ucionicas')->insert([
            'naziv' => 'RAF3'
        ]);
    }
}
