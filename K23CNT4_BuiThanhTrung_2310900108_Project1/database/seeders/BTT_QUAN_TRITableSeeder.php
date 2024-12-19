<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BTT_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bttMatKhau = md5("123456a@");
        DB::table('BTT_Quan_Tri')->insert([
            'bttTaiKhoan'=>"chungtrinhj@gmail.com",
            'bttMatKhau'=>$bttMatKhau,
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_Quan_Tri')->insert([
            'bttTaiKhoan'=>"0978611889",
            'bttMatKhau'=>$bttMatKhau,
            'bttTrangThai'=>0
        ]);
        DB::table('BTT_Quan_Tri')->insert([
            'bttTaiKhoan'=>"buitr1538@gmail.com",
            'bttMatKhau'=>$bttMatKhau,
            'bttTrangThai'=>0
        ]);
    }
}
