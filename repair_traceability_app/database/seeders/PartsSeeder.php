<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('parts_to_repair')->insert([
            'RNO_ID'=>'1',
            'SNA'=>'M11WAdegrehyt',
            'INIT_DATE'=>Carbon::create(2024, 06, 10)->format('Ymd'),
            'END_DATE'=>Carbon::now()->format('Ymd'),
            'IN_PROCESS'=>0,
            'REPAIRED'=>1,
            'SCRAP'=>0
        ]);
    }
}
