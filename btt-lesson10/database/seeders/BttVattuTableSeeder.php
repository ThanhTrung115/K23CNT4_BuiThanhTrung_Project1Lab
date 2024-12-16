<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BttVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bttvattu')->insert([
            'bttMaVTu'=>'DD01',
            'bttTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'bttDvTinh'=>'Bộ',
            'bttPhanTram'=>40,
        ]);
        DB::table('bttvattu')->insert([
            'bttMaVTu'=>'DD02',
            'bttTenVTu'=>'Đầu DVD Hitachi 2 cửa',
            'bttDvTinh'=>'Bộ',
            'bttPhanTram'=>50,
        ]);
    }
}
