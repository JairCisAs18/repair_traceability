<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('models')->insert([['RNO'=>'R16-8481', 'SNA_ID'=>'REARA'], ['RNO'=>'R16-B013', 'SNA_ID'=>'DGH9A'], ['RNO'=>'R16-B016', 'SNA_ID'=>'DGJ4A'], ['RNO'=>'R16-8483', 'SNA_ID'=>'DASHA'], ['RNO'=>'R16-B060', 'SNA_ID'=>'BGBLA'], ['RNO'=>'R16-B064', 'SNA_ID'=>'BGBSA'], ['RNO'=>'R16-B089', 'SNA_ID'=>'VA55A'], ['RNO'=>'R16-B160', 'SNA_ID'=>'VC67A'],['RNO'=>'R16-B162', 'SNA_ID'=>'VC85A'], ['RNO'=>'R16-B178', 'SNA_ID'=>'M11WA']]);
        
    }
}
