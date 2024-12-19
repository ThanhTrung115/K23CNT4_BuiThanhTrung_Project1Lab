<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BTT_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('BTT_LOAI_SAN_PHAM')->insert([
            'bttMaLoai'=>'L001',
            'bttTenLoai'=>'Cây cảnh văn phòng',
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_LOAI_SAN_PHAM')->insert([
            'bttMaLoai'=>'L002',
            'bttTenLoai'=>'Cây để bàn',
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_LOAI_SAN_PHAM')->insert([
            'bttMaLoai'=>'L003',
            'bttTenLoai'=>'Cây cảnh phong thủy',
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_LOAI_SAN_PHAM')->insert([
            'bttMaLoai'=>'L004',
            'bttTenLoai'=>'Cây thủy canh',
            'bttTrangThai'=>0
        ]);
    }
}
